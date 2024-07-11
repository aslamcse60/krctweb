<?php

namespace App\Http\Controllers\Admin\Footer;

use App\Models\Footer\Footer2;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Footer\Footer2FormRequest;

class Footer2Controller extends Controller
{
    public function index()
    {
        $footer2=Footer2::all();
        return view('admin.footers.footer2.index',compact('footer2'));
    }
    public function create()
    {
        return view('admin.footers.footer2.create');
    }
    public function store(Footer2FormRequest $request)
    {
        $validatedData=$request->validated();
        $validatedData['status']=$request->status==true ? '1':'0';
        Footer2::create([
            'name'=>$validatedData['name'],
            'link'=>$validatedData['link'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/footer2')->with('message','Footer2 Added Successfully');
    }

    public function edit(Footer2 $footer2)
    {
        return view('admin.footers.footer2.edit',compact('footer2'));
    }
    public function update(Footer2FormRequest $request,Footer2 $footer2)
    {
        $validatedData=$request->validated();
        $validatedData['status']=$request->status==true ? '1':'0';
        Footer2::where('id',$footer2->id)->update([
            'name'=>$validatedData['name'],
            'link'=>$validatedData['link'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/footer2')->with('message','Footer2 Updated Successfully');

    }
    public function destroy(Footer2 $footer2)
    {
        if($footer2->count()>0){
            $footer2->delete();
            return redirect('admin/footer2')->with('message','Footer2 Deleted Successfully');
        }
        return redirect('admin/footer2')->with('message','Something Went Wrong');
    }
}
