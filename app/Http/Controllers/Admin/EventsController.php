<?php

namespace App\Http\Controllers\Admin;

use App\Models\Events;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Requests\EventsFormRequest;
class EventsController extends Controller
{
    public function index()
    {
        $events=Events::all();
        return view('admin.events.index',compact('events'));
    }
    public function create()
    {
        return view('admin.events.create');
    }
    public function store(EventsFormRequest $request)
    {
        $validatedData=$request->validated();

        $validatedData['status']=$request->status==true ? '1':'0';
        Events::create([
            'month'=>$validatedData['month'],
            'date'=>$validatedData['date'],
            'title'=>$validatedData['title'],
            'time'=>$validatedData['time'],
            'link'=>$validatedData['link'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/events')->with('message','Event Added Successfully');
    }
    public function edit(Events $events)
    {
        return view('admin.events.edit',compact('events'));
    }
    public function update(EventsFormRequest $request,Events $events)
    {
        $validatedData=$request->validated();

        $validatedData['status']=$request->status==true ? '1':'0';
        Events::where('id',$events->id)->update([
            'month'=>$validatedData['month'],
            'date'=>$validatedData['date'],
            'title'=>$validatedData['title'],
            'time'=>$validatedData['time'],
            'link'=>$validatedData['link'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/events')->with('message','Event Updated Successfully');
    }
    public function destroy(Events $events)
    {
        if($events->count()>0){
            $destination=$events->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $events->delete();
            return redirect('admin/events')->with('message','Event Deleted Successfully');
        }
        return redirect('admin/events')->with('message','Something Went Wrong');
    }

}
