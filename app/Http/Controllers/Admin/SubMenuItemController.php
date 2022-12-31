<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuItem;
use App\Models\SubMenuItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubMenuFormRequest;

class SubMenuItemController extends Controller
{
    public function index()
    {
        $menus=MenuItem::all();
        $submenus=SubMenuItem::all();
        return view('admin.submenu.index',compact('menus','submenus'));
    }
    public function create()
    {
        $menuItems=MenuItem::where('status','Enabled')->get();
        return view('admin.submenu.create',compact('menuItems'));
    }
    public function store(SubMenuFormRequest $request)
    {
        $validatedData=$request->validated();
        SubMenuItem::create([
            'name'=>$validatedData['name'],
            'menu_item_id'=>$validatedData['menu_item_id'],
            'link'=>$validatedData['link'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/submenu')->with('message','Sub-Menu Added Successfully');
    }
    public function edit(SubMenuItem $submenu)
    {
        $menuItems=MenuItem::where('status','Enabled')->get();
        return view('admin.submenu.edit',compact('submenu','menuItems'));
    }
    public function update(SubMenuFormRequest $request,SubMenuItem $submenu)
    {
        $validatedData=$request->validated();
        SubMenuItem::where('id',$submenu->id)->update([
            'name'=>$validatedData['name'],
            'menu_item_id'=>$validatedData['menu_item_id'],
            'link'=>$validatedData['link'],
            'status'=>$validatedData['status'],
        ]);
        return redirect('admin/submenu')->with('message','Sub-Menu Updated Successfully');
    }
    public function destroy(SubMenuItem $submenu)
    {
        if($submenu->count()>0){
            $submenu->delete();
            return redirect('admin/submenu')->with('message','Sub-Menu Deleted Successfully');
        }
        return redirect('admin/submenu')->with('message','Something Went Wrong');
    }
}
