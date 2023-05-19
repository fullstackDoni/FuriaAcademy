<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\Auth2\LoginController;
use App\Http\Controllers\Auth2\RegisterController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\InfoForCourseController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideosController;

Route::get('/',function (){
    return redirect()->route('video.index');
});

Route::middleware('auth')->group(function (){
    Route::resource('video',VideoController::class)->except('index','show');

    Route::middleware('hasrole:admin')->group(function (){
        Route::get('/admin/users',[UserController::class,'index'])->name('admin.users.index');
        Route::get('/admin/videos',[VideosController::class,'index'])->name('admin.video.index');
        Route::get('/admin/videos/create',[VideosController::class,'create'])->name('admin.video.create');
        Route::post('/admin/videos/store',[VideosController::class,'store'])->name('admin.video.store');
        Route::get('/admin/users/search',[UserController::class,'index'])->name('admin.users.search');
        Route::put('/users/{user}/ban',[UserController::class,'ban'])->name('users.ban');
        Route::put('/users/{user}/unban',[UserController::class,'unban'])->name('users.unban');
    });
    Route::middleware('hasrole:moderator')->group(function (){

    });
});
Route::resource('video',VideoController::class)->only('index','show');
Route::get('/aboutus',[AboutusController::class,'index'])->name('aboutus');
Route::get('/info',[InfoForCourseController::class,'index'])->name('info');
Route::get('/register',[RegisterController::class,'create'])->name('register.form');
Route::post('/register',[RegisterController::class,'register'])->name('register');
Route::get('/login',[LoginController::class,'create'])->name('login.form');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
