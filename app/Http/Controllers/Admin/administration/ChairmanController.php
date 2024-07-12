<?php

namespace App\Http\Controllers\Admin\administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Administration\Chairman;
use App\Http\Requests\Administration\ChairmanFormRequest;

class ChairmanController extends Controller
{
    public function index()
    {
        $chairman=Chairman::all();
        return view('admin.administration.chairman.index',compact('chairman'));
    }
    public function create()
    {
        return view('admin.administration.chairman.create');
    }
    public function store(ChairmanFormRequest $request)
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $nam=$file->getClientOriginalName();
            $filename=time().'.'.$nam;
            $file->move('uploads/administration/',$filename);
            $validatedData['image']="uploads/administration/$filename";
        }
        Chairman::create([
            'name'=>$validatedData['name'],
            'image'=>$validatedData['image'],
            'description'=>$validatedData['description'],
        ]);
        return redirect('admin/administration/chairman')->with('message','Chairman Added Successfully');
    }

    public function edit(Chairman $chairman)
    {
        return view('admin.administration.chairman.edit',compact('chairman'));
    }
    public function update(ChairmanFormRequest $request,Chairman $chairman)
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $destination=$chairman->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $nam=$file->getClientOriginalName();
            $filename=time().'.'.$nam;
            $file->move('uploads/administration/',$filename);
            $validatedData['image']="uploads/administration/$filename";
        }
        Chairman::where('id',$chairman->id)->update([
            'name'=>$validatedData['name'],
            'image'=>$validatedData['image'] ?? $chairman->image,
            'description'=>$validatedData['description'],
        ]);
        return redirect('admin/administration/chairman')->with('message','Chairman Updated Successfully');

    }
    public function destroy(Chairman $chairman)
    {
        if($chairman->count()>0){
            $destination=$chairman->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $chairman->delete();
            return redirect('admin/administration/chairman')->with('message','Chairman Deleted Successfully');
        }
        return redirect('admin/administration/chairman')->with('message','Something Went Wrong');
    }
}
