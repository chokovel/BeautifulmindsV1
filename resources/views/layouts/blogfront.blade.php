<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Saas Startup App HTML Template">
<meta name="author" content="DynamicLayers">

<title>GlobalMark Capital Consulting Limited</title>

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
<link rel="stylesheet" href=" https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,500,600|Work+Sans:600&display=swap ">


<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/elegant-line-icons.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/truno-icons.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/pricing-table.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/venobox.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">


</head>
<body data-spy="scroll" data-target="#navmenu" data-offset="70">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--
<div class="site-preloader-wrap">
<div class="spinner"></div>
</div> Preloader -->

<header id="header" class="header-section bg-white">
<div class="container">
    <nav class="navbar ">
        <a href="index.html" class="navbar-brand"><img src="{{ asset('assets/img/logo-dark.png')}}" alt="Saasbiz"></a>
        <div class="d-flex menu-wrap">
            <div id="mainmenu" class="mainmenu">
                <ul class="nav">
                    <li><a data-scroll class="nav-link active" href="index.html">Home<span class="sr-only">(current)</span></a> 
                        <ul>
                            <li><a href="index.html">Home 01</a></li>
                            <li><a href="index-2.html">Home 02</a></li>
                            <li><a href="index-3.html">Home 03</a></li>
                            <li><a href="index-4.html">Home 04</a></li>
                        </ul>
                    </li>
                    <li><a data-scroll href="index.html#feature">Features</a></li>
                    <li><a data-scroll href="index.html#screenshots">Screenshots</a></li>
                    <li><a data-scroll href="index.html#reviews">Reviews</a></li>
                    <li><a data-scroll href="index.html#pricing">Pricing</a></li>
                    <li><a href="#">Pages</a> 
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="features.html">Features</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-classic.html">Blog Classic</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="header-right">
                    <a class="menu-btn anim-btn" href="#">Get Started<span></span></a>
            </div>
        </div>
    </nav>
</div>
</header><!--/. header-section -->

<div class="header-height"></div>

@yield('content')

<footer class="widget-section">
<div class="container">
    <div class="row padding">
        <div class="col-lg-3 col-sm-6 sm-padding">
            <div class="widget-content">
                <a href="#"><img src="{{ asset('assets/img/logo-light.png')}}" alt="brand"></a>
                <p>Building your own home is about desire, fantasy. But it’s achievable anyone can do it.</p>
                <ul class="widget-social">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-6 sm-padding">
            <div class="widget-content">
                <h4>Company</h4>
                <ul class="widget-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Clients Reviews</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 sm-padding">
            <div class="widget-content">
                <h4>Headquaters</h4>
                <p>962 Fifth Avenue, 3rd Floor New York, NY10022</p>
                <span>Hello@dynamiclayers.net</span>
                <span>(+123) 456 789 101</span>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 sm-padding">
            <div class="widget-content">
                <h4>Newslatter Subscription</h4>
                <p>Subscribe and get 10% off from our <br>architecture company.</p>
                <div class="subscribe-box clearfix">
                    <div class="subscribe-form-wrap">
                        <form action="#" class="subscribe-form">
                            <input type="email" name="email" id="subs-email" class="form-input" placeholder="Enter Your Email Address...">
                            <button type="submit" class="submit-btn anim-btn">Subscribe<span></span></button>
                            <div id="subscribe-result">
                                <p class="subscription-success"></p>
                                <p class="subscription-error"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-section text-center">
        <p>&copy; <span id="currentYear"></span> Truno Powered by DynamicLayers</p>
    </div><!-- /.footer-section -->
</div>
</footer><!--/.widget-section-->

<a data-scroll href="#header" id="scroll-to-top"><i class="ti-arrow-up"></i></a>

<!-- jQuery Lib -->
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/tether.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/jquery.slicknav.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/smooth-scroll.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/pricing-switcher.js')}}"></script>
<script src="{{ asset('assets/js/vendor/jquery.waypoints.v2.0.3.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/odometer.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/wow.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/venobox.min.js')}}"></script>
<script src="{{ asset('assets/js/main.js')}}"></script>

<script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6197bd36ae35da15"></script>
</body>
</html>