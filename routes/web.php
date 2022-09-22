<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Fronted\FrontedController;

use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\LogoController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\MissionController;
use App\Http\Controllers\backend\VissionController;
use App\Http\Controllers\backend\NewsEventController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\AboutUsController;
// use App\Http\Controllers\backend\ProfileController;
// use App\Http\Controllers\backend\VissionController;
// use App\Http\Controllers\backend\ProfileController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[FrontedController::class,'index']);
Route::get('/about_us',[FrontedController::class,'about_us'])->name('about_us');
Route::get('/contact_us',[FrontedController::class,'contact_us'])->name('contact_us');

Route::post('/message',[FrontedController::class,'message'])->name('store_message');


Route::group(['middleware' => 'auth'],function(){
    Route::prefix('user')->group(function(){
        Route::get('/view',[UserController::class,'view_user'])->name('view_user');
        Route::get('/add',[UserController::class,'add_user'])->name('add_user');
        Route::post('/store',[UserController::class,'store_user'])->name('store_user');
        Route::get('/edit/{id}',[UserController::class,'edit_user'])->name('edit_user');
        Route::post('/update/{id}',[UserController::class,'update_user'])->name('update_user');
        Route::get('/delete/{id}',[UserController::class,'delete_user'])->name('delete_user');
    
    }); 



Route::prefix('user')->group(function(){
    Route::get('/view',[UserController::class,'view_user'])->name('view_user');
    Route::get('/add',[UserController::class,'add_user'])->name('add_user');
    Route::post('/store',[UserController::class,'store_user'])->name('store_user');
    Route::get('/edit/{id}',[UserController::class,'edit_user'])->name('edit_user');
    Route::post('/update/{id}',[UserController::class,'update_user'])->name('update_user');
    Route::get('/delete/{id}',[UserController::class,'delete_user'])->name('delete_user');

});

Route::prefix('profile')->group(function(){
    Route::get('/view', [ProfileController::class,"index"])->name('profile.view');
    Route::get('/edit', [ProfileController::class,"edit"])->name('profile.edit');
    Route::post('/update', [ProfileController::class,"update"])->name('profile.update');
    Route::get('/password/view', [ProfileController::class,"password_view"])->name('profile.password_view');
    Route::post('/password/update', [ProfileController::class,"password_update"])->name('profile.password_update');
});


Route::prefix('logo')->group(function(){
    Route::get('/view',[LogoController::class,'view_logo'])->name('view_logo');
    Route::get('/add',[LogoController::class,'add_logo'])->name('add_logo');
    Route::post('/store',[LogoController::class,'store_logo'])->name('store_logo');
    Route::get('/edit/{id}',[LogoController::class,'edit_logo'])->name('edit_logo');
    Route::post('/update/{id}',[LogoController::class,'update_logo'])->name('update_logo');
    Route::get('/delete/{id}',[LogoController::class,'delete_logo'])->name('delete_logo');

});

Route::prefix('slide')->group(function(){
    Route::get('/view',[SliderController::class,'view_slide'])->name('view_slide');
    Route::get('/add',[SliderController::class,'add_slide'])->name('add_slide');
    Route::post('/store',[SliderController::class,'store_slide'])->name('store_slide');
    Route::get('/edit/{id}',[SliderController::class,'edit_slide'])->name('edit_slide');
    Route::post('/update/{id}',[SliderController::class,'update_slide'])->name('update_slide');
    Route::get('/delete/{id}',[SliderController::class,'delete_slide'])->name('delete_slide');

});


Route::prefix('mission')->group(function(){
    Route::get('/view',[MissionController::class,'view_mission'])->name('view_mission');
    Route::get('/add',[MissionController::class,'add_mission'])->name('add_mission');
    Route::post('/store',[MissionController::class,'store_mission'])->name('store_mission');
    Route::get('/edit/{id}',[MissionController::class,'edit_mission'])->name('edit_mission');
    Route::post('/update/{id}',[MissionController::class,'update_mission'])->name('update_mission');
    Route::get('/delete/{id}',[MissionController::class,'delete_mission'])->name('delete_mission');

});

Route::prefix('vision')->group(function(){
    Route::get('/view',[VissionController::class,'view_vision'])->name('view_vision');
    Route::get('/add',[VissionController::class,'add_vision'])->name('add_vision');
    Route::post('/store',[VissionController::class,'store_vision'])->name('store_vision');
    Route::get('/edit/{id}',[VissionController::class,'edit_vision'])->name('edit_vision');
    Route::post('/update/{id}',[VissionController::class,'update_vision'])->name('update_vision');
    Route::get('/delete/{id}',[VissionController::class,'delete_vision'])->name('delete_vision');

});


Route::prefix('news')->group(function(){
    Route::get('/view',[NewsEventController::class,'view_news'])->name('view_news');
    Route::get('/add',[NewsEventController::class,'add_news'])->name('add_news');
    Route::post('/store',[NewsEventController::class,'store_news'])->name('store_news');
    Route::get('/edit/{id}',[NewsEventController::class,'edit_news'])->name('edit_news');
    Route::post('/update/{id}',[NewsEventController::class,'update_news'])->name('update_news');
    Route::get('/delete/{id}',[NewsEventController::class,'delete_news'])->name('delete_news');

});

Route::prefix('service')->group(function(){
    Route::get('/view',[ServiceController::class,'view_service'])->name('view_service');
    Route::get('/add',[ServiceController::class,'add_service'])->name('add_service');
    Route::post('/store',[ServiceController::class,'store_service'])->name('store_service');
    Route::get('/edit/{id}',[ServiceController::class,'edit_service'])->name('edit_service');
    Route::post('/update/{id}',[ServiceController::class,'update_service'])->name('update_service');
    Route::get('/delete/{id}',[ServiceController::class,'delete_service'])->name('delete_service');

});

Route::prefix('contact')->group(function(){
    Route::get('/view',[ContactController::class,'view_contact'])->name('view_contact');
    Route::get('/add',[ContactController::class,'add_contact'])->name('add_contact');
    Route::post('/store',[ContactController::class,'store_contact'])->name('store_contact');
    Route::get('/edit/{id}',[ContactController::class,'edit_contact'])->name('edit_contact');
    Route::post('/update/{id}',[ContactController::class,'update_contact'])->name('update_contact');
    Route::get('/delete/{id}',[ContactController::class,'delete_contact'])->name('delete_contact');

});

Route::prefix('about')->group(function(){
    Route::get('/view',[AboutUsController::class,'view_about'])->name('view_about');
    Route::get('/add',[AboutUsController::class,'add_about'])->name('add_about');
    Route::post('/store',[AboutUsController::class,'store_about'])->name('store_about');
    Route::get('/edit/{id}',[AboutUsController::class,'edit_about'])->name('edit_about');
    Route::post('/update/{id}',[AboutUsController::class,'update_about'])->name('update_about');
    Route::get('/delete/{id}',[AboutUsController::class,'delete_about'])->name('delete_about');

});

});
















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

