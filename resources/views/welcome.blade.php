<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <!-- meta character set -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>The Baylik Group</title>

    <link rel="icon" type="image/x-icon" href="{{asset('/img/icons/favicon.png')}}">

    <!-- Meta Description -->
    <meta name="description"
          content="The Baylik Group is the leading platform in Florida for the formation, development and growth of investor in Real Estate.">
    <meta name="keywords"
          content="contractor, seller, buyer, realestate, building">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS
    ================================================== -->

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">

    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Ion Icons Font -->
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="{{asset('css/slit-slider.css')}}">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- Modernizer Script for old Browsers -->
    <script src="{{asset('/js/modernizr-2.6.2.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset(mix('css/app.css'))}}">

</head>

<body id="body">
<!-- preloader -->
<div id="preloader">
    <div style="height: 100%; display: flex; justify-content: center; align-items: center">
        <img width="150px" src="{{asset('/img/logo_baylik_group_black.png')}}" alt="The Baylik Group">

    </div>
</div>
<!-- end preloader -->

<!--
Fixed Navigation
==================================== -->
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

                <li><a href="{{url('#steps')}}"><span>3 Step To success</span></a></li>
                <li><a href="{{url('#why')}}"><span>Why Join</span></a></li>
                <li><a href="{{url('#contact')}}"><span>Contact</span></a></li>
            </ul>
            <ul id="auth" class="nav navbar-nav menu">
                @if (\Illuminate\Support\Facades\Route::has('login'))
                    @auth
                        <li class="dropdown">
                            <a style="border: solid 1px #fff; padding: 8px; " href="#" class="dropdown-toggle"
                               data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
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
                        <li class="login-button"><a style="border: solid 1px #fff; padding: 8px;  "
                                                    href="{{ route('login') }}"><span>Log in</span></a></li>
                        @if (\Illuminate\Support\Facades\Route::has('register'))
                            <li><a style="border: solid 1px #fff; padding: 8px; " href="{{ route('register') }}"><span>Register</span></a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </nav>
        <!-- /main nav -->

    </div>
</header>
<!--
End Fixed Navigation
==================================== -->

<main id="app_welcome" class="site-content" role="main">

    <!--
    Home Slider
    ==================================== -->

    <section id="home-slider">
        <div id="slider" class="sl-slider-wrapper">

            <div class="sl-slider">

                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25"
                     data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="mask-overly"></div>
                    <div class="bg-img slider-1"></div>

                    <div class="slide-caption">
                        <div class="caption-content">
                            <h2 class="animated fadeInDown">
                                Expand your Real Estate career!
                            </h2>
                            <p class="animated fadeInDown">You are always one decision away from a completely
                                different life.</p>
                            <button class="btn btn-blue btn-effect" data-toggle="modal"
                                    data-target="#be-contractor">Join Us!
                            </button>
                        </div>
                    </div>

                </div>

                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10"
                     data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="mask-overly"></div>
                    <div class="bg-img slider-2"></div>
                    <div class="slide-caption">
                        <div class="caption-content">
                            <h2 class="animated fadeInDown">Welcome Sellers!</h2>
                            <p class="animated fadeInDown">Get your property sold at the right price. With the right
                                team.</p>
                            <button class="btn btn-blue btn-effect" data-toggle="modal"
                                    data-target="#be-seller">Contact Us
                            </button>
                        </div>
                    </div>

                </div>

                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3"
                     data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="mask-overly"></div>
                    <div class="bg-img slider-3"></div>
                    <div class="slide-caption">
                        <div class="caption-content">
                            <h2 class="animated fadeInDown">Are you looking to buy your new home?</h2>
                            <p class="animated fadeInDown">
                                Make your life a dream, and your dream a reality.
                            </p>
                            <a href="#" class="btn btn-blue btn-effect" data-toggle="modal"
                               data-target="#be-buyer">Contact Us</a>
                        </div>
                    </div>

                </div>

            </div><!-- /sl-slider -->

            <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                <a href="javascript:;" class="sl-prev">
                    <i class="fa fa-angle-left fa-3x"></i>
                </a>
                <a href="javascript:;" class="sl-next">
                    <i class="fa fa-angle-right fa-3x"></i>
                </a>
            </nav>


            <nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
                <span class="nav-dot-current"></span>
                <span></span>
                <span></span>
            </nav>

        </div><!-- /slider-wrapper -->
    </section>

    <!--
    End Home SliderEnd
    ==================================== -->


    <section id="what">
        <div class="container">
            <div class="row">
                <div class=" text-center" style="margin-bottom: 40px;">
                    <h1>What’s at Risk with the Wrong Brokerage</h1>
                    <p>Discover the challenges agents like you face when they settle for less</p>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('/img/img1.jpg')}}" width="100%">
                    <h3>Reduced Income</h3>
                    <p>Hard work should pay off. Don’t settle for reduced commissions that take away from your deserved
                        earnings</p>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('/img/img2.jpg')}}" width="100%">
                    <h3>Stunted Growth</h3>
                    <p>Without the right support and training, your professional growth can be restricted. Choose a
                        brokerage that lets you flourish.</p>
                </div>
                <div class="col-md-3">
                    <div class="block">
                        <img src="{{asset('/img/img3.jpg')}}" width="100%">
                        <h3>Ineffective Marketing</h3>
                        <p>Modern real estate thrives on cutting-edge marketing. Don’t get left behind with outdated
                            strategies</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block">
                        <img src="{{asset('/img/img4.jpg')}}" width="100%">
                        <h3>Burnout</h3>
                        <p>Constant struggle without backup leads to burnout. Align with a brokerage that supports your
                            wellbeing and success.</p>
                    </div>
                </div>
                <div class="col-md-12 about-us">
                    <button class="btn btn-blue btn-effect" style="margin: 60px 0 0 0" data-toggle="modal"
                            data-target="#be-contractor"> Join Baylik Realty: Where Agents Thrive
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class=" text-center" style="margin-bottom: 40px;">
                    <h1>Testimonial</h1>
                    <p>Create new real estate business opportunities and bring all investment strata closer
                        together.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="block">
                        <p>Transitioning to Baylik Realty
                            was the best career decision I've
                            made. The unwavering support
                            and exceptional marketing
                            expertise have transformed my
                            approach to real estate,
                            propelling my success to new
                            heights."</p>
                        <br>
                        <strong>Raul Torres, Baylik Realty Agent</strong>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="block">
                        <p>"Since joining Baylik Realty, my
                            confidence and earnings have
                            skyrocketed thanks to unparalleled
                            support and top-tier digital marketing
                            training."</p>
                        <br>
                        <strong>Yanilsa Ramos, proud Baylik Realty
                            Agent</strong>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="block">
                        <p>"At Baylik Realty, I found more
                            than a brokerage; I discovered a
                            community dedicated to elevating
                            my real estate journey. Their
                            commitment to support and
                            cutting-edge training has
                            empowered me to serve my clients
                            with unmatched excellence."</p>
                        <br>
                        <strong>Enel Felbert, Baylik Realty Agent</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Service section -->
    <section id="why">
        <div class="container">
            <div class="row">

                <div class="section-title text-center">
                    <h1>Why Baylik Realty?</h1>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="ion-cash"></i>
                        </div>
                        <h3>100% Commission:</h3>
                        <p style="text-align: center; margin-bottom: 10px; font-size: 25px">
                            <br>
                            Maximize your earnings.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="ion-heart"></i>
                        </div>
                        <h3>Continuous Support:</h3>
                        <p style="text-align: center; margin-bottom: 10px; font-size: 25px">
                            <br>
                            Guidance at every turn.
                        </p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="ion-ios-people"></i>
                        </div>
                        <h3>Community:</h3>
                        <p style="text-align: center; margin-bottom: 10px; font-size: 25px">
                            <br>
                            Collaborate, celebrate, succeed.</p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="ion-arrow-graph-up-right"></i>
                        </div>
                        <h3>Digital Expertise:</h3>
                        <p style="text-align: center; margin-bottom: 10px; font-size: 25px">
                            <br>
                            Leading, industry strategies.</p>

                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center" data-wow-delay="0.3s">
                    <button data-toggle="modal"
                            data-target="#be-contractor" class="btn btn-blue btn-effect" style="margin: 15px 0">
                        Join Us Today
                    </button>
                </div>

            </div>
        </div>
    </section>
    <!-- end Service section -->

    <section id="steps">
        <div class="container">
            <div class="row">
                <div class=" text-center" style="margin-bottom: 40px;">
                    <h1>Your Success in 3 Simple
                        Steps</h1>

                </div>
                <div class="col-md-4 text-center">
                    <div class="block">
                        <div
                            style="width: 125px; height:125px; margin: 0 auto; background: #0d6efd; padding: 10px; border-radius: 50%;">
                            <h2 style="margin-top: 35px; color: white; "><strong>Step 1 </strong></h2></div>
                        <br>
                        <h3>Connect
                            & Collaborate</h3>
                        <p>Schedule your
                            meeting to discuss
                            career aspirations
                            and join the Baylik
                            family</p>
                        <br>

                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="block">
                        <div
                            style="width: 125px; height:125px; margin: 0 auto; background: #0d6efd; padding: 10px; border-radius: 50%;">
                            <h2 style="margin-top: 35px; color: white; "><strong>Step 2 </strong></h2></div>
                        <br>
                        <h3> Train
                            & Thrive</h3>
                        <p>Equip yourself with
                            industry-leading digital
                            marketing and
                            advertising strategies</p>
                        <br>

                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="block">
                        <div
                            style="width: 125px; height:125px; margin: 0 auto; background: #0d6efd; padding: 10px; border-radius: 50%;">
                            <h2 style="margin-top: 35px; color: white; "><strong>Step 3 </strong></h2></div>
                        <br>
                        <h3> List
                            & Earn</h3>
                        <p>List properties
                            confidently, supported
                            by our team, and earn
                            100% commission</p>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="call">
        <div class="container">
            <div class="row">
                <div class=" text-center" style="margin-bottom: 40px;">
                    <h1>Begin Your Baylik Journey Now”</h1>
                    <p>Step into a future of growth, support, and unmatched
                        earnings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact section -->
    <section id="contact" style="background-color: #f1f1f1">
        <div class="container">
            <div class="row">

                <div class="section-title text-center">
                    <h2>Contact</h2>
                    {{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, <br> sapiente.--}}
                    {{--                                Libero ipsam, dolore quibusdam magni.</p>--}}
                </div>

                <div class="col-md-12">
                    <address class="contact-details">
                        <h3>Our Address</h3>

                        <div class="col-md-4">
                            <p><i class="ion-ios-home-outline"></i>8570 Stirling Rd STE 102-314 ,
                                <span>Hollywood,</span>
                                <span>FL 33024</span>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p><i class="ion-ios-telephone-outline"></i>Phone: 7862824657 </p>
                        </div>
                        <div class="col-md-4 social inline">
                            <p style="display: flex; align-items: center"><i class="ion-ios-email-outline"></i><a
                                    href="mailto:info@thebaylikgroup.com?Subject=I%20want%20to%20know%20more"
                                    target="_blank">info@thebaylikgroup.com</a></p>
                            <div class="form-inline" style="margin-top: 10px">
                                <a href="https://www.facebook.com/profile.php?id=100082544864408" target="_blank"><i
                                        class="ion-social-facebook"></i></a>
                                <a href="https://www.instagram.com/thebaylikgroup/" target="_blank"><i
                                        class="ion-social-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCm1fQcNy81kXBh6fs9UBYPA" target="_blank"><i
                                        class="ion-social-youtube"></i></a>
                                <a href="https://www.linkedin.com/in/alfredo-nunez-0a3169243/" target="_blank"><i
                                        class="ion-social-linkedin"></i></a>
                                <a href="https://twitter.com/thebaylikgroup" target="_blank"><i
                                        class="ion-social-twitter"></i></a>
                                <a href="https://www.tiktok.com/@thebaylikgroup" target="_blank"
                                   style="font-weight: 700">TikTok</a>
                            </div>

                        </div>

                    </address>
                </div>


            </div>
        </div>
    </section>
    <!-- end Contact section -->


    <!-- Modal Join Us Contractor
================================================== -->


    <modal-form-contractor></modal-form-contractor>


    <!-- Modal Join Us Seller
================================================== -->


    <modal-form-seller></modal-form-seller>


    <!-- Modal Join Us Buyer
  ================================================== -->


    <modal-form-buyer></modal-form-buyer>


</main>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>
                    <a href="">
                        <img src="{{asset('/img/logo_white.png')}}" alt="">
                    </a>
                </h4>
                <p>Baylik Group is the leading platform in Florida for training, development and growth in the world of
                    real estate. We offer incredible and exclusive properties in commercial and residential settings. We
                    offer wide investment possibilities.</p>
            </div>
            <div class="col-md-4 footer-item">
                <h4>Company</h4>
                <ul>
                    <li><a href="#what">About us</a></li>
                    <li><a href="#why">Our Mission</a></li>
                    <li><a href="#service">Seller / Buyer</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 footer-item">
                <h4>Agents</h4>
                <p>We open the doors to our real estate projects. In this innovative business model we optimize your
                    investments in real estate and boost your passive income. Baylik Group is transparency, trust and
                    professionalism.</p>
                <button class="btn btn-blue btn-effect" style="margin: 15px 0" data-toggle="modal"
                        data-target="#be-contractor">Join Us
                </button>
            </div>
        </div>
    </div>
</footer>
<section id="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p style="color:white">
                    COPYRIGHT © 2022 , THE BAYLIK GROUP | REALTOR AGENCY
                </p>
            </div>
            <div class="col-md-6 text-right">
                <p style="color:white">
                    Design and Developed By <a href="https://lesinnov.com">Les Innovations</a>
                </p>
            </div>
        </div>
    </div>
</section>


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

<script src="{{asset(mix('/js/app_welcome.js'))}}"></script>
</body>
</html>
