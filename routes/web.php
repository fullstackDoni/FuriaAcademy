<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\InfoForCourseController;

Route::get('/',function (){
    return redirect()->route('video.index');
});
Route::resource('video',VideoController::class);
Route::get('/aboutus',[AboutusController::class,'index'])->name('aboutus');
Route::get('/info',[InfoForCourseController::class,'index'])->name('info');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
