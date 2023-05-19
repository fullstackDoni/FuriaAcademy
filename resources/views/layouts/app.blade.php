<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <title>Furia Academy</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-cyborg-gaming.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('https://unpkg.com/swiper@7/swiper-bundle.min.css')}}"/>
    <!--

    TemplateMo 579 Cyborg Gaming

    https://templatemo.com/tm-579-cyborg-gaming

    -->
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="/" class="logo">
                        <img src="{{asset('images/logo.png')}}" alt="" width="70" height="70">
                    </a>
                    @guest
                        <ul class="nav">
                            <li><a href="/" class="active">Басты бет</a></li>
                            @if(Route::has('login'))
                                <li><a href="{{route('login')}}">Кіру</a></li>
                            @endif
                            @if(Route::has('register'))
                                <li><a href="{{route('register')}}">Тіркелу</a></li>
                            @endif
                            @endguest
                            @auth
                                <li><a href="{{route('admin.users.index')}}">Юзерлерлер</a></li> |
                                <li><a href="{{route('admin.video.index')}}">Видеолар</a></li> |
                                <li><a href="{{route('logout')}}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">Шығу</a>
                                    <form id="logout-form" action="{{route('logout')}}" method="POST"
                                          class="d-none">
                                        @csrf
                                    </form></li>
                            @endauth
                        </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<main class="py-4">
    @yield('content')
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="footer-widget">
                    <div class="footer-menu">
                        <h4 class="footer-widget-title">Академия туралы</h4>
                        <ul>
                            <li>
                                <a href="{{route('aboutus')}}">Біз туралы</a>
                            </li>
                            <li>
                                <a href="{{route('info')}}">Толық ақпарат</a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@FuriaAcademy"><i class="fab fa-youtube fa-1x"
                                                                                   style="color: red;"><br></i>YOUTUBE
                                    арнамыз</a>
                            </li>
                            <li>
                                <a href="https://www.donationalerts.com/r/donistreamer" target="_blank">Көмек қолын созу</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="footer-widget">
                    <div class="footer-menu">
                        <h4 class="footer-widget-title">Байланыс құралдары</h4>
                        <ul class="text-white">
                            <li>
                                iamfuriaacademy@gmail.com
                            </li>
                            <li>
                                +7 747 474 3456
                            </li>
                            <li>
                                Жандосова 55,5 Этаж,537 кабинет(Нархоз Университеті)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mini-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright-text">
                                <p>© 2023 Furia Academy. All rights reserved.
                                </p>
                            </div>
                            <div class="go_top">
                                <span class="icon-arrow-up"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/isotope.min.js')}}"></script>
<script src="{{asset('js/owl-carousel.js')}}"></script>
<script src="{{asset('js/tabs.js')}}"></script>
<script src="{{asset('js/popup.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
