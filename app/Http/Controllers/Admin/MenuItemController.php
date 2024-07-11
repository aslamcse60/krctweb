<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuFormRequest;

class MenuItemController extends Controller
{
    public function index()
    {
        $menus=MenuItem::all();
        return view('admin.menu.index',compact('menus'));
    }
    public function create()
    {
        return view('admin.menu.create');
    }
    public function store(MenuFormRequest $request)
    {
        $validatedData=$request->validated();
        MenuItem::create([
            'name'=>$validatedData['name'],
            'link'=>$validatedData['link'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/menu')->with('message','Menu Added Successfully');
    }
    public function edit(MenuItem $menu)
    {
        return view('admin.menu.edit',compact('menu'));
    }
    public function update(MenuFormRequest $request,MenuItem $menu)
    {
        $validatedData=$request->validated();
        MenuItem::where('id',$menu->id)->update([
            'name'=>$validatedData['name'],
            'link'=>$validatedData['link'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/menu')->with('message','Menu Updated Successfully');
    }
    public function destroy(MenuItem $menu)
    {
        if($menu->count()>0){
            $menu->delete();
            return redirect('admin/menu')->with('message','Menu Deleted Successfully');
        }
        return redirect('admin/menu')->with('message','Something Went Wrong');
    }
}
