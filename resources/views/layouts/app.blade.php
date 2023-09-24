<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The Baylik Group') }}</title>


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

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '626693332688610');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=626693332688610&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NFEBCYVD9Y"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-NFEBCYVD9Y');
    </script>
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
                    <ul  class="nav navbar-nav menu">
                        <li><a href="{{'/#steps'}}"><span>3 Step To success</span></a></li>
                        <li><a href="{{'/#why'}}"><span>Why Join</span></a></li>
                        <li><a href = "javascript:void(0)" onclick="window.location.href='https://calendly.com/alfredonunez/strategy-session'" target="_blank"><span>Schedule Now</span></a></li>
                    </ul>
                    <ul id="auth" class="nav navbar-nav menu">
                        @if (\Illuminate\Support\Facades\Route::has('login'))
                            @auth
                                <li class="dropdown">
                                    <a style="border: solid 1px #fff; padding: 8px; " href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        @if(\Illuminate\Support\Facades\Gate::allows('dashboard-admin'))
                                            <li>
                                                <a href="{{route('home')}}"><span>{{'DASHBOARD'}}</span></a>
                                            </li>
                                        @endif
                                        <li>
                                            <a href="{{route('logout')}}"
                                               onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><span>{{'LOGOUT'}}</span></a>
                                        </li>
                                    </ul>

                                </li>

                                <form id="frm-logout" method="POST" action="{{route('logout')}}">
                                    {{ csrf_field() }}
                                </form>
                            @else
                                <li class="login-button"><a  style="border: solid 1px #fff; padding: 8px;  " href="{{ route('login') }}"><span>Log in</span></a></li>
                                @if (\Illuminate\Support\Facades\Route::has('register'))
{{--                                    <li><a  style="border: solid 1px #fff; padding: 8px; " href="{{ route('register') }}"><span>Register</span></a></li>--}}
                                @endif
                            @endauth

                        @endif
                    </ul>
                </nav>
                <!-- /main nav -->
            </div>
        </header>

        <main class="site-content" role="main" id="app_dashboard">
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

    <script src="{{asset(mix('/js/app_dashboard.js'))}}"></script>
</body>
</html>
