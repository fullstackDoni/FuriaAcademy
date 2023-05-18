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
                                    @foreach($video as $vio)
                                    <div class="col-lg-4">
                                        <img src="{{$vio->image}}" alt="ads" style="border-radius: 23px;">
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="text-white">
                                            <p class="text-white">{{$vio->description}}</p>
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
