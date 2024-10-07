<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image, Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(!auth()->user()->can('homepage.banner')){
            abort(403, 'Unauthorized action.');
        }
        $banners = Banner::latest()->get();
        return view('admin.banner.index',compact('banners'));
    }


    public function create()
    {
        return view('admin.banner.create');
    }


    public function store(Request $request)
    {
        $rules = [
            'status'=>'required',
            'section'=>'required',
            'image'=>'required',
        ];
        $customMessages = [
            'image.required' => trans('admin_validation.Image is required'),
        ];
        $this->validate($request, $rules,$customMessages);

        $publication = new Banner();

        if ($request->hasFile('image')) {
            $image = Image::make($request->file('image'));
            $extension = $request->image->getClientOriginalExtension();
            $image_name = Str::slug('banners') . date('-Y-m-d-h-i-s-') . rand(999, 9999) . '.' . $extension;

            if (!File::exists(public_path('uploads/banners'))) {
                File::makeDirectory(public_path('uploads/banners'), $mode = 0777, true, true);
            }

            $destination_path1 = 'uploads/banners/' . $image_name;
            $image->resize(261, 81);
            echo public_path($destination_path1);

            $image->save(public_path($destination_path1));
            $publication->image = $image_name;
        }
        $publication->status = $request->status;
      	$publication->section = $request->section;
        $publication->save();
        $notification = trans('admin_validation.Created Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.banners.index')->with($notification);
    }

    public function show($id){
        $category = Banner::find($id);
        return response()->json(['category' => $category],200);
    }

    public function edit($id)
    {
        $item = Banner::find($id);
        return view('admin.banner.edit',compact('item'));
    }

    public function update(Request $request,$id)
    {
        
        $item = Banner::find($id);
        $rules = [
            'status'=>'required',
            'section'=>'required',
            'image'=>'',
        ];
        $customMessages = [
            'status.required' => trans('admin_validation.status is required'),
        ];
        $this->validate($request, $rules,$customMessages);

        if($request->image){
            $old_thumbnail = $item->image;
            $image = Image::make($request->file('image'));
            $extention = $request->image->getClientOriginalExtension();
            $image_name = Str::slug('banners').date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $destation_path1 = 'uploads/banners/'.$image_name;
            $image->resize(261,81);
            $image->save(public_path().'/'.$destation_path1);
            $item->image=$image_name;
            $item->save();
            if ($old_thumbnail) {
                if (File::exists(public_path().'/uploads/banners/'.$old_thumbnail)) {
                    unlink(public_path().'/uploads/banners/'.$old_thumbnail);
                }
            }
        }

        $item->section = $request->section;
        $item->status = $request->status;
        $item->save();

        $notification = trans('admin_validation.Update Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.banners.index')->with($notification);
    }
    public function destroy($id)
    {
        $item = Banner::find($id);
        if ($item->image) {
            if (File::exists(public_path().'/uploads/banners/'.$item->image)) {
                unlink(public_path().'/uploads/banners/'.$item->image);
            }
        }
        $item->delete();
        $notification = trans('admin_validation.Delete Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.banners.index')->with($notification);
    }
    public function changeStatus($id){

        $category = Banner::find($id);
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
