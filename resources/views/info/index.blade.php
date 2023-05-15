@extends('layouts.app')
@section('title','Index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Featured Start ***** -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="feature-banner header-text">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="{{asset('images/test.jpg')}}" alt="" style="border-radius: 23px;">
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="text-white">
                                           Furia Academy -
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
