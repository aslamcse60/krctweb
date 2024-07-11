<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NewsFormRequest;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index',compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(NewsFormRequest $request )
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/news/',$filename);
            $validatedData['image']="uploads/news/$filename";
        }
        $validatedData['status']=$request->status==true ? '1':'0';
        News::create([
            'description'=>$validatedData['description'],
            'image'=>$validatedData['image'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/news')->with('message','News Added Successfully');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit',compact('news'));
    }
    public function update(NewsFormRequest $request,News $news)
    {
        $validatedData=$request->validated();
        if($request->hasFile('image')){
            $destination=$news->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/news/',$filename);
            $validatedData['image']="uploads/news/$filename";
        }
        $validatedData['status']=$request->status==true ? '1':'0';
        News::where('id',$news->id)->update([
            'description'=>$validatedData['description'],
            'image'=>$validatedData['image'] ?? $news->image,
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/news')->with('message','News Updated Successfully');

    }
    public function destroy(News $news)
    {
        if($news->count()>0){
            $destination=$news->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $news->delete();
            return redirect('admin/news')->with('message','News Deleted Successfully');
        }
        return redirect('admin/news')->with('message','Something Went Wrong');
    }
}
