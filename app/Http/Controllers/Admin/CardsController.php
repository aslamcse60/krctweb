<?php

namespace App\Http\Controllers\Admin;


use App\Models\Cards;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

use App\Http\Requests\CardFormRequest;
class CardsController extends Controller
{
    public function index()
    {
        $cards=Cards::all();
        return view('admin.cards.index',compact('cards'));
    }
    public function create()
    {
        return view('admin.cards.create');
    }
    public function store(CardFormRequest $request)
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $nam=$file->getClientOriginalName();
            $filename=time().'.'.$nam;
            $file->move('uploads/cards/',$filename);
            $validatedData['image']="uploads/cards/$filename";
        }
        $validatedData['status']=$request->status==true ? '1':'0';
        Cards::create([
            'title'=>$validatedData['title'],
            'image'=>$validatedData['image'],
            'description'=>$validatedData['description'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/cards')->with('message','Card Added Successfully');
    }

    public function edit(Cards $cards)
    {
        return view('admin.cards.edit',compact('cards'));
    }
    public function update(CardFormRequest $request,Cards $cards)
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $destination=$cards->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $nam=$file->getClientOriginalName();
            $filename=time().'.'.$nam;
            $file->move('uploads/cards/',$filename);
            $validatedData['image']="uploads/cards/$filename";
        }
        $validatedData['status']=$request->status==true ? '1':'0';
        Cards::where('id',$cards->id)->update([
            'title'=>$validatedData['title'],
            'image'=>$validatedData['image'] ?? $cards->image,
            'description'=>$validatedData['description'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/cards')->with('message','Card Updated Successfully');

    }
    public function destroy(Cards $cards)
    {
        if($cards->count()>0){
            $destination=$cards->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $cards->delete();
            return redirect('admin/cards')->with('message','Card Deleted Successfully');
        }
        return redirect('admin/cards')->with('message','Something Went Wrong');
    }

}
