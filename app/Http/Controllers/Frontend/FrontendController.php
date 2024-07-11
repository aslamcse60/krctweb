<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use App\Models\Cards;
use App\Models\Events;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Feedback;
use App\Models\MenuItem;
use App\Models\Placement;
use App\Models\Recruiter;
use Illuminate\Http\Request;
use App\Models\Footer\Footer1;
use App\Models\Footer\Footer2;
use App\Models\Footer\Footer3;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $menuItems=MenuItem::where('status','enabled')->get();
        $cards=Cards::where('status','0')->get();
        $sliders=Slider::where('status','0')->get();
        $placements=Placement::where('status','0')->get();
        $recruiters=Recruiter::where('status','0')->get();
        $galleries=Gallery::where('status','0')->get();
        $footer1=Footer1::where('status','0')->get();
        $footer2=Footer2::where('status','0')->get();
        $footer3=Footer3::where('status','0')->get();
        $news=News::where('status','0')->orderBy('id', 'DESC')->get();
        $feedback=Feedback::where('status','0')->get();
        $events=Events::where('status','0')->orderBy('id', 'DESC')->get();
        return view('frontend.index',compact('sliders','placements','recruiters','galleries','menuItems','cards','news','events','feedback','footer1','footer2','footer3'));

    }
   public function test()
   {
    return view('frontend.test');
   }

}
