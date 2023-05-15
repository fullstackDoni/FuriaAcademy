@extends('layouts.app')
@section('title','Index')
@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="other-games">
                    <div class="start-stream">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4>Топ туралы</h4>
                            </div>
                            <div class="container-lg">
                                <div class="row">
                                    <div class="container text-center">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="item">
                                                    <div class="icon">
                                                        <img src="{{asset('images/areke.jpg')}}" alt="" style="max-width: 140px; border-radius: 50%;">
                                                    </div>
                                                    <h4 class="text-center">Кенжебаев Арман</h4>
                                                    <p>#Java #ReactJS #Python #Django #C++ #Laravel</p>
                                                    <a href="https://www.instagram.com/kenzhebbaev/"><i class="fab fa-instagram fa-2x" style="color: #ac2bac;"></i></a>
                                                    <a href="https://github.com/Kenzhebaev7"><i class="fab fa-github fa-2x" style="color: #333333;"></i></a>
                                                    <a href="https://www.linkedin.com/in/arman-kenzhebay-b36254257/"><i class="fab fa-linkedin-in fa-2x" style="color: #0082ca;"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-5">
                                                <div class="item">
                                                    <div class="icon">
                                                        <img src="{{asset('images/doni.jpg')}}" alt="" style="max-width: 140px; border-radius: 50%;">
                                                    </div>
                                                    <h4>Досқұлов Данияр</h4>
                                                    <p>#Java #ReactJS #Python #Django #SQL #Laravel</p>
                                                    <a href="https://www.instagram.com/doskulov04/"><i class="fab fa-instagram fa-2x" style="color: #ac2bac;"></i></a>
                                                    <a href="https://github.com/fullstackDoni"><i class="fab fa-github fa-2x" style="color: #333333;"></i></a>
                                                    <a href="https://www.linkedin.com/in/daniyar-doskulov-748031257/"><i class="fab fa-linkedin-in fa-2x" style="color: #0082ca;"></i></a>
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
        </div>
    </div>

@endsection
