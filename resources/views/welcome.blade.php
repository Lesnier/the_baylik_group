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
        <title>Blue Pro</title>
        <!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords"
              content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Themefisher">

        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- CSS
        ================================================== -->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">

        <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <!-- Ion Icons Font -->
        <link rel="stylesheet" href="/css/ionicons.min.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="/css/jquery.fancybox.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="/css/owl.carousel.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="/css/slit-slider.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="/css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="/css/main.css">

        <!-- Modernizer Script for old Browsers -->
        <script src="/js/modernizr-2.6.2.min.js"></script>

        <link rel="stylesheet" href="{{mix('css/app.css')}}">

    </head>

    <body id="body">

        <!-- preloader -->
        <!-- <div id="preloader">
            <div class="loder-box">
                <div class="battery"></div>
            </div>
        </div> -->
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
                            <img width="200px" src="/img/logo_white.png" alt="">
                        </a>
                    </h1>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav menu">
                        <li><a href="#what"><span>What</span></a></li>
                        <li><a href="#why"><span>Why</span></a></li>
                        <li><a href="#portfolio"><span>Seller/Buyer</span></a></li>
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
        <!--
        End Fixed Navigation
        ==================================== -->

        <main id="app" class="site-content" role="main">

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
                                    <a href="#" class="btn btn-blue btn-effect">Join US</a>
                                </div>
                            </div>

                        </div>

                        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10"
                             data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                            <div class="mask-overly"></div>
                            <div class="bg-img slider-2"></div>
                            <div class="slide-caption">
                                <div class="caption-content">
                                    <h2 class="animated fadeInDown"> Welcome Sellers!</h2>
                                    <p class="animated fadeInDown">Don't look for customers for your products, look for
                                        products for your customers</p>
                                    <a href="#" class="btn btn-blue btn-effect">Join US</a>
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
                                    <a href="#" class="btn btn-blue btn-effect">Join US</a>
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
                            <h2>What</h2>
                        </div>
                        <div class="col-md-4">
                            <h4>The Perfect Spot</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                est laborum.</p>
                            <button class="btn btn-blue btn-effect" style="margin: 15px 0" data-toggle="modal"
                                    data-target="#be-contractor">Be Contractor
                            </button>

                        </div>
                        <div class="col-md-8">
                            <img class="img-responsive" src="/img/features.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>


            <section id="why">
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center" style="margin-bottom: 40px;">
                            <h2>Why</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Accusantium repellendus,
                                ut saepe, consequatur dolor eum!.</p>
                        </div>
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="block">
                                <img style="max-width:50%" src="img/prototype.jpg" alt="" class="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate magni, delectus
                                    nam qui deserunt perspiciatis, voluptates ratione. Atque voluptate qui dolor veniam
                                    voluptatibus, itaque odit, ullam ipsam exercitationem et ex.</p>

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
                                <p style="text-align: justify; margin-bottom: 10px">When you work with The Baylik Group , you’re working with someone that combines market expertise with entrepreneurial innovation. We will listen to your needs and goals, use data and creativity to optimize your property for potential buyers, and stand beside you for every step of the selling process.</p>
                                <p style="text-align: justify; margin-bottom: 10px">Here at The Baylik Group we put your listing in front of more potential buyers worldwide than anyone else. We welcome expectations because we hold ourselves to the highest standard. We know that trust is earned through delivering results and that our success is defined by yours.</p>
                                <p style="text-align: justify; margin-bottom: 10px">If you’re considering selling your home, or just want to get a sense of what your home would get on the market, we would love to meet.</p>
                                <button class="btn btn-blue btn-effect" data-toggle="modal"
                                   data-target="#be-seller" style="margin: 15px 0">Be Seller</button>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 text-center" data-wow-delay="0.3s">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="ion-person"></i>
                                </div>
                                <h3>Buyer</h3>
                                <p style="text-align: justify; margin-bottom: 10px">Buying a property or investing in South Florida ? Experience and expertise matter, and they can make a significant difference in making sure that you not only find the right house, but that you also pay the best price.Purchasing a home is one of the most important decisions you’ll make, and the right advice and guidance is paramount.</p>
                                <p style="text-align: justify; margin-bottom: 10px">At The Baylik Group, we not only have a thorough understanding of the marketplace, we also have access to many properties that are off-market and an awareness of properties that are about to be listed. Most importantly, we are keenly aware of the nuances that determine value and we are discerning as to construction quality, materials, and craftsmanship. We will listen to your needs and find you the perfect home and we will make sure that you make an educated and informed decision. Once you choose a property we will represent your interest vociferously throughout the purchase process, negotiating the best possible purchase price, managing and advocating for you during inspections, escrow, title, and closing.</p>
                                <p style="text-align: justify; margin-bottom: 10px">Please contact us to set up a meeting.</p>
                                <button data-toggle="modal"
                                   data-target="#be-buyer" class="btn btn-blue btn-effect" style="margin: 15px 0">Be Buyer</button>
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
                                    <p><i class="ion-ios-home-outline"></i>Phoenix Inc.<span>PO Box 345678</span> <span>Little Lonsdale St, Melbourne </span><span>Australia</span>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p><i class="ion-ios-telephone-outline"></i>Phone: (415) 124-5678 </p>
                                </div>
                                <div class="col-md-4">
                                    <p><i class="ion-ios-email-outline"></i>website@yourname.com</p>
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
                                <img src="/img/logo_white.png" alt="">
                            </a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias ullam numquam repudiandae
                            repellat ex autem voluptas vel esse quo excepturi!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, repellendus.</p>
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
                        <p>A contractor is the person or company that is contracted by another organization or individual for the construction of a building, road, installation or some special work, such as refineries or oil platforms for example</p>
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
                        <p>
                            COPYRIGHT © 2022 , THE BAYLIK GROUP | REALTOR AGENCY
                        </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>
                            Design and Developed By <a href="https://lesinnov.com">Les Innovations</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Essential jQuery Plugins
        ================================================== -->
        <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
        <!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- Google Map API -->
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
        <!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
        <!-- Custom Functions -->
        <script src="js/jquery.form.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>
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

        <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
