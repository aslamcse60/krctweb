<?php

namespace App\Http\Controllers\Admin\Side\AboutUs;

use Illuminate\Http\Request;
use App\Models\Side\AboutUs\Vision;
use App\Http\Controllers\Controller;
use App\Http\Requests\Side\AboutUs\VisionFormRequest;

class VisionController extends Controller
{
    public function index()
    {
        $vision=Vision::all();
        return view('admin.side-pages.vision.index',compact('vision'));
    }
    public function edit(Vision $vision)
    {
        return view('admin.side-pages.vision.edit',compact('vision'));
    }
    public function update(VisionFormRequest $request,Vision $vision)
    {
        $validatedData=$request->validated();
        Vision::where('id',$vision->id)->update([
            'description'=>$validatedData['description'],
        ]);
        return redirect('admin/vision')->with('message','Vision Updated Successfully');

    }
}
