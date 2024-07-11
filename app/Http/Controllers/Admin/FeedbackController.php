<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Models\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FeedbackFormRequest;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedback = Feedback::all();
        return view('admin.feedback.index',compact('feedback'));
    }

    public function create()
    {
        return view('admin.feedback.create');
    }

    public function store(FeedbackFormRequest $request )
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/feedback/',$filename);
            $validatedData['image']="uploads/feedback/$filename";
        }
        $validatedData['status']=$request->status==true ? '1':'0';
        Feedback::create([
            'image'=>$validatedData['image'],
            'description'=>$validatedData['description'],
            'name'=>$validatedData['name'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/feedback')->with('message','Feedback Added Successfully');
    }

    public function edit(Feedback $feedback)
    {
        return view('admin.feedback.edit',compact('feedback'));
    }
    public function update(FeedbackFormRequest $request,Feedback $feedback)
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $destination=$feedback->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/feedback/',$filename);
            $validatedData['image']="uploads/feedback/$filename";
        }
        $validatedData['status']=$request->status==true ? '1':'0';
        Feedback::where('id',$feedback->id)->update([
            'image'=>$validatedData['image'] ?? $feedback->image,
            'description'=>$validatedData['description'],
            'name'=>$validatedData['name'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/feedback')->with('message','Feedback Updated Successfully');

    }
    public function destroy(Feedback $feedback)
    {
        if($feedback->count()>0){
            $destination=$feedback->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $feedback->delete();
            return redirect('admin/feedback')->with('message','Feedback Deleted Successfully');
        }
        return redirect('admin/feedback')->with('message','Something Went Wrong');
    }
}
