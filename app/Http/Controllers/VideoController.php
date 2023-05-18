<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;


class VideoController extends Controller
{
    public function index(){
        $allVideo = Video::all();
        return view('video.index',['videos'=>$allVideo]);
    }
    public function show(Video $video){
        return view('video.show',['video' => $video]);
    }
}
