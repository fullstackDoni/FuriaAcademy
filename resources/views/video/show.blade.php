@extends('layouts.app')
@section('title','Index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="feature-banner header-text">
                                <div class="row">
                                    @foreach($videos as $video)
                                        <div class="col-lg-4">
                                            <img src="{{$video->image}}" alt="" style="border-radius: 23px;">
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="text-white">
                                                <p class="text-white">{{$video->description}}</p>
                                                <div class="p-5">
                                                    <br>
                                                    <a class="btn btn-primary" target="_blank" href="{{$video->video}}" role="button">Барлық видео осы жерде </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
