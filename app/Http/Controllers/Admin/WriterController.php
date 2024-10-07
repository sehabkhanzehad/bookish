<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Writer;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image, Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(!auth()->user()->can('writer.index')){
            abort(403, 'Unauthorized action.');
        }
        $writers = Writer::orderBy('order', 'asc')->latest()->get();
        return view('admin.writers.index',compact('writers'));
    }


    public function create()
    {
      if(!auth()->user()->can('writer.create')){
            abort(403, 'Unauthorized action.');
        }

        return view('admin.writers.create');
    }


    public function store(Request $request)
    {

       if(!auth()->user()->can('writer.create')){
            abort(403, 'Unauthorized action.');
        }

        $rules = [
            'name'=>'required',
            'designation'=>'',
            'status'=>'required',
            'is_popular'=>'required',
          	'order'=>'nullable',
          	'address'=>'',
          	'phone'=>'',
            'image'=>'',
        ];
        $customMessages = [
            'name.required' => trans('admin_validation.Name is required'),
        ];
        $this->validate($request, $rules,$customMessages);

        $writer = new Writer();




        if ($request->hasFile('image')) {
            $image = Image::make($request->file('image'));
            $extension = $request->image->getClientOriginalExtension();
            $image_name = Str::slug($request->name) . date('-Y-m-d-h-i-s-') . rand(999, 9999) . '.' . $extension;

            // Ensure directory existence
            if (!File::exists(public_path('uploads/writers'))) {
                File::makeDirectory(public_path('uploads/writers'), $mode = 0777, true, true);
            }

            $destination_path1 = 'uploads/writers/' . $image_name;
            $image->resize(136, 136);

            // Debugging
            echo public_path($destination_path1);

            // Save image
            $image->save(public_path($destination_path1));
            $writer->image = $image_name;
        }

        $writer->name = $request->name;
        $writer->designation = $request->designation;
        $writer->address = $request->address;
        $writer->phone = $request->phone;
        $writer->status = $request->status;
        $writer->is_popular = $request->is_popular;
      	$writer->order = $request->order;
        $writer->save();

        $notification = trans('admin_validation.Created Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.writers.index')->with($notification);
    }


    public function show($id){
      	if(!auth()->user()->can('productCategory.show')){
            abort(403, 'Unauthorized action.');
        }

        $category = Category::find($id);
        return response()->json(['category' => $category],200);
    }

    public function edit($id)
    {
      if(!auth()->user()->can('writer.edit')){
            abort(403, 'Unauthorized action.');
        }

        $item = Writer::find($id);
        return view('admin.writers.edit',compact('item'));
    }


    public function update(Request $request,$id)
    {
      if(!auth()->user()->can('writer.edit')){
            abort(403, 'Unauthorized action.');
        }
        $item = Writer::find($id);
        $rules = [
            'name'=>'required',
            'designation'=>'required',
            'status'=>'required',
            'is_popular'=>'required',
          	'order'=>'',
          	'address'=>'',
          	'phone'=>'',
            'image'=>'',
        ];
        $customMessages = [
            'name.required' => trans('admin_validation.Name is required'),
        ];
        $this->validate($request, $rules,$customMessages);


        if($request->image){
            $old_thumbnail = $item->image;
            $image = Image::make($request->file('image'));
            $extention = $request->image->getClientOriginalExtension();
            $image_name = Str::slug($request->name).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;

            $destation_path1 = 'uploads/writers/'.$image_name;
            $image->resize(136, 136);
            $image->save(public_path().'/'.$destation_path1);

            $item->image=$image_name;
            $item->save();
            if($old_thumbnail){
                if(File::exists(public_path().'/uploads/writers/'.$old_thumbnail))unlink(public_path().'/uploads/writers/'.$old_thumbnail);
            }
        }


        $item->name = $request->name;
        $item->designation = $request->designation;
        $item->address = $request->address;
        $item->phone = $request->phone;
        $item->status = $request->status;
        $item->is_popular = $request->is_popular;
      	$item->order = $request->order;
        $item->save();

        $notification = trans('admin_validation.Update Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.writers.index')->with($notification);
    }

    public function destroy($id)
    {
      if(!auth()->user()->can('writer.delete')){
            abort(403, 'Unauthorized action.');
        }

        $category = Writer::find($id);
        $category->delete();
        $notification = trans('admin_validation.Delete Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.writers.index')->with($notification);
    }
    public function changeStatus($id){
        $category = Writer::find($id);
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
