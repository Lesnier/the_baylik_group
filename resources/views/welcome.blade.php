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
            <div  style="height: 100%; display: flex; justify-content: center; align-items: center">
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
                        <li><a href="{{url('#what')}}"><span>What</span></a></li>
                        <li><a href="{{url('#why')}}"><span>Why</span></a></li>
                        <li><a href="{{url('#service')}}"><span>Seller/Buyer</span></a></li>
                    </ul>
                    <ul id="auth" class="nav navbar-nav menu" >
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
                                    <li><a  style="border: solid 1px #fff; padding: 8px; " href="{{ route('register') }}"><span>Register</span></a></li>
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
                                        You are Contractor. Join us!
                                    </h2>
                                    <p class="animated fadeInDown">You are always one decision away from a completely
                                        different life.</p>
                                    <button class="btn btn-blue btn-effect" data-toggle="modal"
                                            data-target="#be-contractor">Join as Contractor
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
                                    <p class="animated fadeInDown">Don't look for customers for your products, look for
                                        products for your customers</p>
                                    <button class="btn btn-blue btn-effect" data-toggle="modal"
                                            data-target="#be-seller">Join as Seller
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
                                       data-target="#be-buyer">Join as Buyer</a>
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
                        <div class="section-title text-center">
                            <h2>About Us</h2>
                        </div>
                        <div class="col-md-4 about-us">
                            <h4>The best business</h4>
                            <p>Here at Baylik Group we are positioning our brand to help our agents be one of the most investor focus in the South Florida market. While we provide a traditional list and buy platform with global connections to all of our clients. We also have invested in Real Estate our self and are very familiar with the process of commercial, residential, and leasing investments properties. Setting us up to help you achieve all you Real Estate investment goals.</p>
                            <button class="btn btn-blue btn-effect" style="margin: 15px 0" data-toggle="modal"
                                    data-target="#be-contractor">Be Contractor
                            </button>

                        </div>
                        <div class="col-md-8">
                            <img class="img-responsive" src="{{asset('/img/features.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </section>


            <section id="why">
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center" style="margin-bottom: 40px;">
                            <h2>Our Mission</h2>
                            <p>Create new real estate business opportunities and bring all investment strata closer
                                together.</p>
                        </div>
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="block">
                                <img style="max-width:50%" src="{{asset('/img/prototype.jpg')}}" alt="" class="">
                                <p>The Baylik Group is a pioneering the way that Real Estate agents generate wealth for years to come. Joining our team give you the possibility to become a partner in our future projects. All of this while providing top tier costumer service to our clients and positioning the brand as the most investor friendly brokerage.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Service section -->
            <section id="service">
                <div class="container">
                    <div class="row">

                        <div class="section-title text-center">
                            <h2>We Help You</h2>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="ion-home"></i>
                                </div>
                                <h3>Seller</h3>
                                <p style="text-align: justify; margin-bottom: 10px">When you work with The Baylik Group
                                    , you’re working with someone that combines market expertise with entrepreneurial
                                    innovation. We will listen to your needs and goals, use data and creativity to
                                    optimize your property for potential buyers, and stand beside you for every step of
                                    the selling process.</p>
                                <p style="text-align: justify; margin-bottom: 10px">Here at The Baylik Group we put your
                                    listing in front of more potential buyers worldwide than anyone else. We welcome
                                    expectations because we hold ourselves to the highest standard. We know that trust
                                    is earned through delivering results and that our success is defined by yours.</p>
                                <p style="text-align: justify; margin-bottom: 10px">If you’re considering selling your
                                    home, or just want to get a sense of what your home would get on the market, we
                                    would love to meet.</p>
                                <button class="btn btn-blue btn-effect" data-toggle="modal"
                                        data-target="#be-seller" style="margin: 15px 0">Be Seller
                                </button>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 text-center" data-wow-delay="0.3s">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="ion-person"></i>
                                </div>
                                <h3>Buyer</h3>
                                <p style="text-align: justify; margin-bottom: 10px">Buying a property or investing in
                                    South Florida?. Experience and expertise matter, and they can make a significant
                                    difference in making sure that you not only find the right house, but that you also
                                    pay the best price.
                                </p>
                                <p style="text-align: justify; margin-bottom: 10px">At The Baylik Group, we not only
                                    have a thorough understanding of the marketplace, we also have access to many
                                    properties that are off-market and an awareness of properties that are about to be
                                    listed. We will listen to your needs and find you the perfect home and we will make
                                    sure that you make an educated and informed decision. Once you choose a property we
                                    will represent your interest vociferously throughout the purchase process,
                                    negotiating the best possible purchase price.</p>
                                <p style="text-align: justify; margin-bottom: 10px">Please contact us to set up a
                                    meeting.</p>
                                <button data-toggle="modal"
                                        data-target="#be-buyer" class="btn btn-blue btn-effect" style="margin: 15px 0">
                                    Be Buyer
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- end Service section -->


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
                                    <p><i class="ion-ios-home-outline"></i>8570 Stirling Rd STE 102-314 , <span>Hollywood,</span>
                                        <span>FL 33024</span>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p><i class="ion-ios-telephone-outline"></i>Phone: 7862824657 </p>
                                </div>
                                <div class="col-md-4">
                                    <p><i class="ion-ios-email-outline"></i>info@thebaylikgroup.com</p>
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
                        <p>Baylik Group is the leading platform in Florida for training, development and growth in the world of real estate. We offer incredible and exclusive properties in commercial and residential settings. We offer wide investment possibilities.</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#what">What</a></li>
                            <li><a href="#why">Why</a></li>
                            <li><a href="#service">Seller / Buyer</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Contractors</h4>
                        <p>We open the doors to our real estate projects. In this innovative business model we optimize your investments in real estate and boost your passive income. Baylik Group is transparency, trust and professionalism.</p>
                        <button class="btn btn-blue btn-effect" style="margin: 15px 0" data-toggle="modal"
                                data-target="#be-contractor">Be Contractor
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
        <script>
            $(function () {
                $("#contact-form").validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 2
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        subject: {
                            required: true,
                            minlength: 2
                        },
                        message: {
                            required: true,
                            minlength: 2
                        }
                    },
                    messages: {
                        name: {
                            required: "come on, you have a name don't you?",
                            minlength: "your name must consist of at least 2 characters"
                        },
                        email: {
                            required: "no email, no support"
                        },
                        subject: {
                            required: "you have a reason to contact, write it here",
                            minlength: "thats all? really?"
                        },
                        message: {
                            required: "um...yea, you have to write something to send this form.",
                            minlength: "thats all? really?"
                        }
                    },
                    submitHandler: function (form) {
                        $(form).ajaxSubmit({
                            type: "POST",
                            data: $(form).serialize(),
                            url: "mail.php",
                            success: function () {
                                $(".contact-form").fadeTo("slow", 1, function () {
                                    $(".contact-form").resetForm();
                                    $(".success").slideDown("slow");
                                });
                            },
                            error: function () {
                                $(".contact-form").fadeTo("slow", 1, function () {
                                    $(".error").slideDown("slow");
                                });
                            }
                        });
                    },
                    errorPlacement: function (error, element) {
                        element.after(error);
                        error.hide().slideDown();
                    }
                });
            });
        </script>

        <script src="{{asset(mix('/js/app_welcome.js'))}}"></script>
    </body>
</html>
