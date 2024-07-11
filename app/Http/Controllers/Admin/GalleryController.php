<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryFormRequest;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries=Gallery::all();
        return view('admin.gallery.index',compact('galleries'));
    }
    public function create()
    {
        return view('admin.gallery.create');
    }
    public function store(GalleryFormRequest $request)
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/gallery/',$filename);
            $validatedData['image']="uploads/gallery/$filename";
        }
        Gallery::create([
            'title'=>$validatedData['title'],
            'image'=>$validatedData['image']?? $gallery->image,
        ]);
        $validatedData['status']=$request->status==true ? '1':'0';
        return redirect('admin/gallery')->with('message','Gallery Added Successfully');
    }
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit',compact('gallery'));
    }
    public function update(GalleryFormRequest $request,Gallery $gallery)
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $destination=$gallery->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/gallery/',$filename);
            $validatedData['image']="uploads/gallery/$filename";
        }
        $validatedData['status']=$request->status==true ? '1':'0';
        Gallery::where('id',$gallery->id)->update([
            'title'=>$validatedData['title'],
            'image'=>$validatedData['image'] ?? $gallery->image,
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/gallery')->with('message','Gallery Updated Successfully');

    }
    public function destroy(Gallery $gallery)
    {
        if($gallery->count()>0){
            $destination=$gallery->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $gallery->delete();
            return redirect('admin/gallery')->with('message','Gallery Deleted Successfully');
        }
        return redirect('admin/gallery')->with('message','Something Went Wrong');
    }
}
