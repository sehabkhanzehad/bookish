<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image, Illuminate\Support\Str;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(!auth()->user()->can('publication.index')){
            abort(403, 'Unauthorized action.');
        }
        $publications = Publication::orderBy('order', 'asc')->latest()->get();
        return view('admin.publications.index',compact('publications'));
    }


    public function create()
    {
      if(!auth()->user()->can('publication.create')){
            abort(403, 'Unauthorized action.');
        }

        return view('admin.publications.create');
    }


    public function store(Request $request)
    {

       if(!auth()->user()->can('publication.create')){
            abort(403, 'Unauthorized action.');
        }

        $rules = [
            'title'=>'required',
            'status'=>'required',
          	'order'=>'',
          	'address'=>'',
            'image'=>'',
        ];
        $customMessages = [
            'title.required' => trans('admin_validation.Name is required'),
        ];
        $this->validate($request, $rules,$customMessages);

        $publication = new Publication();

        if ($request->hasFile('image')) {
            $image = Image::make($request->file('image'));
            $extension = $request->image->getClientOriginalExtension();
            $image_name = Str::slug($request->title) . date('-Y-m-d-h-i-s-') . rand(999, 9999) . '.' . $extension;

            // Ensure directory existence
            if (!File::exists(public_path('uploads/publications'))) {
                File::makeDirectory(public_path('uploads/publications'), $mode = 0777, true, true);
            }

            $destination_path1 = 'uploads/publications/' . $image_name;
            $image->resize(120, 120);

            // Debugging
            echo public_path($destination_path1);
            // Save image
            $image->save(public_path($destination_path1));
            $publication->image = $image_name;
        }
        $publication->slug = Str::slug($request->title);
        $publication->title = $request->title;
        $publication->address = $request->address;
        $publication->status = $request->status;
      	$publication->order = $request->order;
        $publication->save();
        $notification = trans('admin_validation.Created Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.publications.index')->with($notification);
    }

    public function show($id){
      	if(!auth()->user()->can('publication.show')){
            abort(403, 'Unauthorized action.');
        }

        $category = Publication::find($id);
        return response()->json(['category' => $category],200);
    }

    public function edit($id)
    {
      if(!auth()->user()->can('publication.edit')){
            abort(403, 'Unauthorized action.');
        }

        $item = Publication::find($id);
        return view('admin.publications.edit',compact('item'));
    }


    public function update(Request $request,$id)
    {
      if(!auth()->user()->can('publication.edit')){
            abort(403, 'Unauthorized action.');
        }
        $item = Publication::find($id);
        $rules = [
            'title'=>'required',
            'status'=>'required',
          	'order'=>'',
          	'address'=>'',
            'image'=>'',
        ];
        $customMessages = [
            'title.required' => trans('admin_validation.Name is required'),
        ];
        $this->validate($request, $rules,$customMessages);

        if($request->image){
            $old_thumbnail = $item->image;
            $image = Image::make($request->file('image'));
            $extention = $request->image->getClientOriginalExtension();
            $image_name = Str::slug($request->title).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $destation_path1 = 'uploads/publications/'.$image_name;
            $image->resize(120, 120);
            $image->save(public_path().'/'.$destation_path1);
            $item->image=$image_name;
            $item->save();
            if($old_thumbnail){
    if(File::exists(public_path().'/uploads/publications/'.$old_thumbnail))unlink(public_path().'/uploads/publications/'.$old_thumbnail);
            }
        }


        $item->slug = Str::slug($request->title);
        $item->title = $request->title;
        $item->address = $request->address;
        $item->status = $request->status;
      	$item->order = $request->order;
        $item->save();

        $notification = trans('admin_validation.Update Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.publications.index')->with($notification);
    }
    public function destroy($id)
    {
      if(!auth()->user()->can('publication.delete')){
            abort(403, 'Unauthorized action.');
        }

        $item = Publication::find($id);
        $item->delete();
        $notification = trans('admin_validation.Delete Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.publications.index')->with($notification);
    }
    public function changeStatus($id){

        $category = Publication::find($id);
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
