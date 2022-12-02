<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Fronted\FrontedController;

use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\LogoController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\AboutUsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;





Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[FrontedController::class,'index']);
Route::get('/product-details/{id}',[FrontedController::class,'product_details'])->name('product-details');
Route::get('/product-details-list/{id}',[FrontedController::class,'product_details_list'])->name('product-details-list');


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

Route::prefix('category')->group(function(){
    Route::get('/view',[CategoryController::class,'view_category'])->name('view_category');
    Route::get('/add',[CategoryController::class,'add_category'])->name('add_category');
    Route::post('/store',[CategoryController::class,'store_category'])->name('store_category');
    Route::get('/edit/{id}',[CategoryController::class,'edit_category'])->name('edit_category');
    Route::post('/update/{id}',[CategoryController::class,'update_category'])->name('update_category');
    Route::get('/delete/{id}',[CategoryController::class,'delete_category'])->name('delete_category');

});

Route::prefix('brand')->group(function(){
    Route::get('/view',[BrandController::class,'view'])->name('view_brand');
    Route::get('/add',[BrandController::class,'add'])->name('add_brand');
    Route::post('/store',[BrandController::class,'store'])->name('store_brand');
    Route::get('/edit/{id}',[BrandController::class,'edit'])->name('edit_brand');
    Route::post('/update/{id}',[BrandController::class,'update'])->name('update_brand');
    Route::get('/delete/{id}',[BrandController::class,'delete'])->name('delete_brand');

});

Route::prefix('product')->group(function(){
    Route::get('/view',[ProductController::class,'view'])->name('view_product');
    Route::get('/add',[ProductController::class,'add'])->name('add_product');
    Route::post('/store',[ProductController::class,'store'])->name('store_product');
    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit_product');
    Route::post('/update/{id}',[ProductController::class,'update'])->name('update_product');
    Route::get('/delete/{id}',[ProductController::class,'delete'])->name('delete_product');
    Route::get('/details/{id}',[ProductController::class,'details'])->name('product_details');

});

Route::prefix('order')->group(function(){
    Route::get('/view',[OrderController::class,'view'])->name('view_order');
    Route::get('/delete/{id}',[OrderController::class,'delete'])->name('delete_order');

});

Route::post('/inser-user-info',[OrderController::class,'inser_user_info'])->name('inser-user-info');











});
















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

