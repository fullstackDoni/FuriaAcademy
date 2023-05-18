<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
        $allVideo = Course::all();
        return view('video.index',['videos'=>$allVideo]);
    }
    public function show(Course $course){
        return view('video.show',['videos'=>$course]);
    }
}
