<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The Baylik Group') }}</title>

    <!-- Scripts -->
    <script src="{{ asset(mix('/js/app.js')) }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- CSS
       ================================================== -->

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">

    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <!-- Ion Icons Font -->
    <link rel="stylesheet" href="{{asset('/css/ionicons.min.css')}}">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="{{asset('/css/jquery.fancybox.css')}}">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.css')}}">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="{{asset('/css/slit-slider.css')}}">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">

    <!-- Modernizer Script for old Browsers -->
    <script src="{{asset('/js/modernizr-2.6.2.min.js')}}"></script>

    <!-- Styles -->
    <link href="{{ asset(mix('/css/app.css')) }}" rel="stylesheet">
</head>
<body>
    <div id="body">
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <a href="/">
                            <img width="200px" src="{{asset('/img/logo_white.png')}}" alt="">
                        </a>
                    </h1>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav menu">
                        <li><a href="{{url('#what')}}"><span>What</span></a></li>
                        <li><a href="{{url('#why')}}"><span>Why</span></a></li>
                        <li><a href="{{url('#portfolio')}}"><span>Seller/Buyer</span></a></li>
                    </ul>
                    <ul class="nav navbar-nav menu">
                        @if (\Illuminate\Support\Facades\Route::has('login'))
                            @auth
                                <li><a href="{{ url('/home') }}"><span>Home</span></a></li>
                            @else
                                <li><a href="{{ route('login') }}"><span>Log in</span></a></li>
                                @if (\Illuminate\Support\Facades\Route::has('register'))
                                    <li><a href="{{ route('register') }}"><span>Register</span></a></li>
                                @endif
                            @endauth

                        @endif
                    </ul>
                </nav>
                <!-- /main nav -->

            </div>
        </header>

        <main class="site-content" role="main" >
            @yield('content')
        </main>
    </div>
    <!-- Essential jQuery Plugins
      ================================================== -->
    <!-- Main jQuery -->
    <script src="{{asset('/js/jquery-1.11.1.min.js')}}"></script>
    <!-- Twitter Bootstrap -->
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <!-- Single Page Nav -->
    <script src="{{asset('/js/jquery.singlePageNav.min.js')}}"></script>
    <!-- jquery.fancybox.pack -->
    <script src="{{asset('/js/jquery.fancybox.pack.js')}}"></script>
    <!-- Google Map API -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!-- Owl Carousel -->
    <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <!-- jquery easing -->
    <script src="{{asset('/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/js/jquery.easing.min.js')}}"></script>
    <!-- Fullscreen slider -->
    <script src="{{asset('/js/jquery.slitslider.js')}}"></script>
    <script src="{{asset('/js/jquery.ba-cond.min.js')}}"></script>
    <!-- onscroll animation -->
    <script src="{{asset('/js/wow.min.js')}}"></script>
    <!-- Custom Functions -->
    <script src="{{asset('/js/jquery.form.min.js')}}"></script>
    <script src="{{asset('/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
</body>
</html>
