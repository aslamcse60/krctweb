<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::controller(App\Http\Controllers\Frontend\FrontendController::class)->group(function (){
    Route::get('/','index');
    Route::prefix('about-us')->group(function () {
        Route::get('/vision-mission', 'vision');
        Route::get('/about-campus','campus');
    });
    Route::prefix('administration')->group(function () {
        Route::get('/hod', 'hod');
        Route::get('/chairman','chairman');
        Route::get('/executive-director','ed');
        Route::get('/principal','principal');
    });
    Route::prefix('academics')->group(function () {
        Route::get('/programmes-offered', 'po');
    });


});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);
    Route::get('users',[App\Http\Controllers\Admin\UserController::class,'index']);
    Route::get('user/{user_id}',[App\Http\Controllers\Admin\UserController::class,'edit']);
    Route::put('update-user/{user_id}',[App\Http\Controllers\Admin\UserController::class,'update']);
    Route::get('delete/{user_id}',[App\Http\Controllers\Admin\UserController::class,'delete']);
    //Route::get('/register',[App\Http\Controllers\Admin\UserController::class,'register']);
    Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
        Route::get('sliders','index');
        Route::get('sliders/create','create');
        Route::post('sliders/create','store');
        Route::get('sliders/{slider}/edit','edit');
        Route::put('sliders/{slider}','update');
        Route::get('sliders/{slider}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\PlacementController::class)->group(function () {
        Route::get('placement','index');
        Route::get('placement/create','create');
        Route::post('placement','store');
        Route::get('placement/{placement}/edit','edit');
        Route::put('placement/{placement}','update');
        Route::get('placement/{placement}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\RecruiterController::class)->group(function () {
        Route::get('recruiter','index');
        Route::get('recruiter/create','create');
        Route::post('recruiter','store');
        Route::get('recruiter/{recruiter}/edit','edit');
        Route::put('recruiter/{recruiter}','update');
        Route::get('recruiter/{recruiter}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\GalleryController::class)->group(function () {
        Route::get('gallery','index');
        Route::get('gallery/create','create');
        Route::post('gallery','store');
        Route::get('gallery/{gallery}/edit','edit');
        Route::put('gallery/{gallery}','update');
        Route::get('gallery/{gallery}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\MenuItemController::class)->group(function () {
        Route::get('menu','index');
        Route::get('menu/create','create');
        Route::post('menu','store');
        Route::get('menu/{menu}/edit','edit');
        Route::put('menu/{menu}','update');
        Route::get('menu/{menu}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\SubMenuItemController::class)->group(function () {
        Route::get('submenu','index');
        Route::get('submenu/create','create');
        Route::post('submenu','store');
        Route::get('submenu/{submenu}/edit','edit');
        Route::put('submenu/{submenu}','update');
        Route::get('submenu/{submenu}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\CardsController::class)->group(function () {
        Route::get('cards','index');
        Route::get('cards/create','create');
        Route::post('cards/create','store');
        Route::get('cards/{cards}/edit','edit');
        Route::put('cards/{cards}','update');
        Route::get('cards/{cards}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\Footer\Footer1Controller::class)->group(function () {
        Route::get('footer1','index');
        Route::get('footer1/create','create');
        Route::post('footer1/create','store');
        Route::get('footer1/{footer1}/edit','edit');
        Route::put('footer1/{footer1}','update');
        Route::get('footer1/{footer1}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\Footer\Footer2Controller::class)->group(function () {
        Route::get('footer2','index');
        Route::get('footer2/create','create');
        Route::post('footer2/create','store');
        Route::get('footer2/{footer2}/edit','edit');
        Route::put('footer2/{footer2}','update');
        Route::get('footer2/{footer2}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\Footer\Footer3Controller::class)->group(function () {
        Route::get('footer3','index');
        Route::get('footer3/create','create');
        Route::post('footer3/create','store');
        Route::get('footer3/{footer3}/edit','edit');
        Route::put('footer3/{footer3}','update');
        Route::get('footer3/{footer3}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\EventsController::class)->group(function () {
        Route::get('events','index');
        Route::get('events/create','create');
        Route::post('events/create','store');
        Route::get('events/{events}/edit','edit');
        Route::put('events/{events}','update');
        Route::get('events/{events}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\NewsController::class)->group(function () {
        Route::get('news','index');
        Route::get('news/create','create');
        Route::post('news/create','store');
        Route::get('news/{news}/edit','edit');
        Route::put('news/{news}','update');
        Route::get('news/{news}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\FeedbackController::class)->group(function () {
        Route::get('feedback','index');
        Route::get('feedback/create','create');
        Route::post('feedback/create','store');
        Route::get('feedback/{feedback}/edit','edit');
        Route::put('feedback/{feedback}','update');
        Route::get('feedback/{feedback}/delete','destroy');
    });
    Route::controller(App\Http\Controllers\Admin\Side\AboutUs\VisionController::class)->group(function () {
        Route::get('vision','index');
        Route::get('vision/{vision}/edit','edit');
        Route::put('vision/{vision}','update');
    });


});

Route::prefix('coordinator')->middleware(['auth','isCoordinator'])->group(function (){
    Route::get('/dashboard',[App\Http\Controllers\Coordinator\DashboardController::class,'index']);
});
