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
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="{{asset('images/logo.png')}}" alt="" width="80" height="80">
                    </a>
                    <ul class="nav">
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">Browse</a></li>
                        <li><a href="#">Details</a></li>
                        <li><a href="#">Streams</a></li>
                        <li><a href="#">Profile <img src="assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

<main class="py-4">
    @yield('content')
</main>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/isotope.min.js')}}"></script>
<script src="{{asset('js/owl-carousel.js')}}"></script>
<script src="{{asset('js/tabs.js')}}"></script>
<script src="{{asset('js/popup.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright © 2023 <a href="#">Furia Academy</a>. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

</body>

</html>
