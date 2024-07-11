<?php

namespace App\Http\Controllers\Admin;

use App\Models\Recruiter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Requests\RecruiterFormRequest;


class RecruiterController extends Controller
{
    public function index()
    {
        $recruiters=Recruiter::all();
        return view('admin.recruiter.index',compact('recruiters'));
    }
    public function create()
    {
        return view('admin.recruiter.create');
    }
    public function store(RecruiterFormRequest $request)
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/recruiter/',$filename);
            $validatedData['image']="uploads/recruiter/$filename";
        }
        Recruiter::create([
            'title'=>$validatedData['title'],
            'image'=>$validatedData['image']?? $recruiter->image,
        ]);
        $validatedData['status']=$request->status==true ? '1':'0';
        return redirect('admin/recruiter')->with('message','Recruiter Added Successfully');
    }
    public function edit(Recruiter $recruiter)
    {
        return view('admin.recruiter.edit',compact('recruiter'));
    }
    public function update(RecruiterFormRequest $request,Recruiter $recruiter)
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $destination=$recruiter->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/recruiter/',$filename);
            $validatedData['image']="uploads/recruiter/$filename";
        }
        $validatedData['status']=$request->status==true ? '1':'0';
        Recruiter::where('id',$recruiter->id)->update([
            'title'=>$validatedData['title'],
            'image'=>$validatedData['image'] ?? $recruiter->image,
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/recruiter')->with('message','Recruiter Updated Successfully');

    }
    public function destroy(Recruiter $recruiter)
    {
        if($recruiter->count()>0){
            $destination=$recruiter->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $recruiter->delete();
            return redirect('admin/recruiter')->with('message','Recruiter Deleted Successfully');
        }
        return redirect('admin/recruiter')->with('message','Something Went Wrong');
    }
}
