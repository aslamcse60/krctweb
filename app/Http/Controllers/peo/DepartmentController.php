<?php

namespace App\Http\Controllers\peo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MenuItem;
use App\Models\Footer\Footer1;
use App\Models\Footer\Footer2;
use App\Models\Footer\Footer3;

class DepartmentController extends Controller
{
    public function po()
    {
        $menuItems=MenuItem::where('status','enabled')->get();
        $footer1=Footer1::where('status','0')->get();
        $footer2=Footer2::where('status','0')->get();
        $footer3=Footer3::where('status','0')->get();
        return view('frontend.peo.po',compact('menuItems','footer1','footer2','footer3'));
    }
}
