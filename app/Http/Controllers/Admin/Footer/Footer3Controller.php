<?php

namespace App\Http\Controllers\Admin\Footer;

use App\Models\Footer\Footer3;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Footer\Footer3FormRequest;

class Footer3Controller extends Controller
{
    public function index()
    {
        $footer3=Footer3::all();
        return view('admin.footers.footer3.index',compact('footer3'));
    }
    public function create()
    {
        return view('admin.footers.footer3.create');
    }
    public function store(Footer3FormRequest $request)
    {
        $validatedData=$request->validated();
        $validatedData['status']=$request->status==true ? '1':'0';
        Footer3::create([
            'name'=>$validatedData['name'],
            'link'=>$validatedData['link'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/footer3')->with('message','Footer3 Added Successfully');
    }

    public function edit(Footer3 $footer3)
    {
        return view('admin.footers.footer3.edit',compact('footer3'));
    }
    public function update(Footer3FormRequest $request,Footer3 $footer3)
    {
        $validatedData=$request->validated();
        $validatedData['status']=$request->status==true ? '1':'0';
        Footer3::where('id',$footer3->id)->update([
            'name'=>$validatedData['name'],
            'link'=>$validatedData['link'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/footer3')->with('message','Footer3 Updated Successfully');

    }
    public function destroy(Footer3 $footer3)
    {
        if($footer3->count()>0){
            $footer3->delete();
            return redirect('admin/footer3')->with('message','Footer3 Deleted Successfully');
        }
        return redirect('admin/footer3')->with('message','Something Went Wrong');
    }
}
