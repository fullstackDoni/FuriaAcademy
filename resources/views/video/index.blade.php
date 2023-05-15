@extends('layouts.app')
@section('title','Index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h6>Furia Academy ге Қош келдініз</h6>
                                    <h4><em>IT</em> ге Бізбен бастар жол</h4>
                                    <div class="main-button">
                                        <a href="{{route('info')}}">Толық ақпарат</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="most-popular">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-section">
                            <h4>Біздің оқытатын бағдарламалалық тілдеріміз</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="{{asset('images/java.png')}}" alt="">
                                    <h4>Java<br></h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="{{asset('images/python.jpg')}}" alt="" >
                                    <h4>Python<br></h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="{{asset('images/web.png')}}" alt="" height="150">
                                    <h4>Intro to Web<br></h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="{{asset('images/reactjs.jpg')}}" alt="">
                                    <h4>React JS<br></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

