<?php

namespace App\Http\Controllers\Admin;

use App\Models\Placement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Requests\PlacementFormRequest;

class PlacementController extends Controller
{
    public function index()
    {
        $placements=Placement::all();
        return view('admin.placement.index',compact('placements'));
    }
    public function create()
    {
        return view('admin.placement.create');
    }
    public function store(PlacementFormRequest $request)
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/placement/',$filename);
            $validatedData['image']="uploads/placement/$filename";
        }
        Placement::create([
            'name'=>$validatedData['name'],
            'image'=>$validatedData['image']?? $placement->image,
            'department'=>$validatedData['department'],
            'company'=>$validatedData['company'],
        ]);
        $validatedData['status']=$request->status==true ? '1':'0';
        return redirect('admin/placement')->with('message','Placement Added Successfully');
    }
    public function edit(Placement $placement)
    {
        return view('admin.placement.edit',compact('placement'));
    }
    public function update(PlacementFormRequest $request,Placement $placement)
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $destination=$placement->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/placement/',$filename);
            $validatedData['image']="uploads/placement/$filename";
        }
        $validatedData['status']=$request->status==true ? '1':'0';
        Placement::where('id',$placement->id)->update([
            'name'=>$validatedData['name'],
            'image'=>$validatedData['image'] ?? $placement->image,
            'department'=>$validatedData['department'],
            'company'=>$validatedData['company'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/placement')->with('message','Placement Updated Successfully');

    }
    public function destroy(Placement $placement)
    {
        if($placement->count()>0){
            $destination=$placement->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $placement->delete();
            return redirect('admin/placement')->with('message','Placement Deleted Successfully');
        }
        return redirect('admin/placement')->with('message','Something Went Wrong');
    }
}
