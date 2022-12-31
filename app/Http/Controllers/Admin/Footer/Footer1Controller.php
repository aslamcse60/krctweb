<?php

namespace App\Http\Controllers\Admin\Footer;

use App\Models\Footer\Footer1;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Footer\Footer1FormRequest;

class Footer1Controller extends Controller
{
    public function index()
    {
        $footer1=Footer1::all();
        return view('admin.footers.footer1.index',compact('footer1'));
    }
    public function create()
    {
        return view('admin.footers.footer1.create');
    }
    public function store(Footer1FormRequest $request)
    {
        $validatedData=$request->validated();

        $validatedData['status']=$request->status==true ? '1':'0';
        Footer1::create([
            'name'=>$validatedData['name'],
            'link'=>$validatedData['link'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/footer1')->with('message','Footer1 Added Successfully');
    }

    public function edit(Footer1 $footer1)
    {
        return view('admin.footers.footer1.edit',compact('footer1'));
    }
    public function update(Footer1FormRequest $request,Footer1 $footer1)
    {
        $validatedData=$request->validated();

        $validatedData['status']=$request->status==true ? '1':'0';
        Footer1::where('id',$footer1->id)->update([
            'name'=>$validatedData['name'],
            'link'=>$validatedData['link'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/footer1')->with('message','Footer1 Updated Successfully');

    }
    public function destroy(Footer1 $footer1)
    {
        if($footer1->count()>0){
            
            $footer1->delete();
            return redirect('admin/footer1')->with('message','Footer1 Deleted Successfully');
        }
        return redirect('admin/footer1')->with('message','Something Went Wrong');
    }

}
