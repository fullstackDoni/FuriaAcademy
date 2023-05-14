<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VideoController;


Route::get('/video',[VideoController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
