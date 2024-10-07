<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!auth()->user()->can('subject.index')){
            abort(403, 'Unauthorized action.');
        }
        $packages = Package::orderBy('order', 'asc')->latest()->get();
        return view('admin.packages.index',compact('packages'));
    }


    public function create()
    {
      if(!auth()->user()->can('subject.create')){
            abort(403, 'Unauthorized action.');
        }

        return view('admin.packages.create');
    }


    public function store(Request $request)
    {

       if(!auth()->user()->can('subject.create')){
            abort(403, 'Unauthorized action.');
        }

        $rules = [
            'title'=>'required',
            'status'=>'required',
          	'order'=>'',
        ];
        $customMessages = [
            'title.required' => trans('admin_validation.Name is required'),
        ];
        $this->validate($request, $rules,$customMessages);

        $subject = new Package();

        $subject->slug = Str::slug($request->title);
        $subject->title = $request->title;
        $subject->is_home = $request->is_home;
        $subject->status = $request->status;
      	$subject->order = $request->order;
        $subject->save();
        $notification = trans('admin_validation.Created Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.packages.index')->with($notification);
    }

    public function show($id){
      	if(!auth()->user()->can('subject.show')){
            abort(403, 'Unauthorized action.');
        }

        $category = Package::find($id);
        return response()->json(['category' => $category],200);
    }

    public function edit($id)
    {
      if(!auth()->user()->can('subject.update')){
            abort(403, 'Unauthorized action.');
        }

        $item = Package::find($id);
        return view('admin.packages.edit',compact('item'));
    }


    public function update(Request $request,$id)
    {
      if(!auth()->user()->can('subject.update')){
            abort(403, 'Unauthorized action.');
        }
        $item = Package::find($id);
        $rules = [
            'title'=>'required',
            'status'=>'required',
          	'order'=>'',
        ];
        $customMessages = [
            'title.required' => trans('admin_validation.Name is required'),
        ];
        $this->validate($request, $rules,$customMessages);
        $item->slug = Str::slug($request->title);
        $item->title = $request->title;
        $item->is_home = $request->is_home;
        $item->status = $request->status;
      	$item->order = $request->order;
        $item->save();

        $notification = trans('admin_validation.Update Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.packages.index')->with($notification);
    }
    public function destroy($id)
    {
      if(!auth()->user()->can('subject.delete')){
            abort(403, 'Unauthorized action.');
        }

        $item = Package::find($id);
        $item->delete();
        $notification = trans('admin_validation.Delete Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.packages.index')->with($notification);
    }
    public function changeStatus($id){

        $category = Package::find($id);
        if($category->status==1){
            $category->status=0;
            $category->save();
            $message = trans('admin_validation.Inactive Successfully');
        }else{
            $category->status=1;
            $category->save();
            $message= trans('admin_validation.Active Successfully');
        }
        return response()->json($message);
    }
}
