<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify'=>true]);

//Frontend 
Route::get('/',         [FrontendController::class,'index'])->name('frontend.index');
Route::get('/index',    [FrontendController::class,'index'])->name('frontend.index');
Route::get('/cart',     [FrontendController::class,'cart'])->name('frontend.cart');
Route::get('/checkout', [FrontendController::class,'checkout'])->name('frontend.checkout');
Route::get('/detail',   [FrontendController::class,'detail'])->name('frontend.detail');
Route::get('/shop',     [FrontendController::class,'shop'])->name('frontend.shop');


//Backend


Route::group(['prefix'=>'admin' , 'as' =>'admin.'],function(){
    
    //guest to website 
    Route::group(['middleware'=>'guest'],function(){
        Route::get('/login', [BackendController::class,'login'])->name('login');
        Route::get('/register', [BackendController::class,'register'])->name('register');
        Route::get('/lock-screen', [BackendController::class,'lock_screen'])->name('lock-screen');
        Route::get('/recover-password', [BackendController::class,'recover_password'])->name('recover-password');

    });

    //uthenticate to website 
    Route::group(['middleware'=>['roles','role:admin|supervisor']],function(){
        Route::get('/', [BackendController::class,'index'])->name('index');
        Route::get('/index', [BackendController::class,'index'])->name('index2');
    });
    
});

