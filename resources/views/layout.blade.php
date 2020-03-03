<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <title>THUNDR - @yield('title') </title>

    @yield('meta')

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
{{--    <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">--}}
{{--    <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">--}}
{{--    <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">--}}



    <!-- Theme CSS -->
    <link type="text/css" media="screen" rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <!-- Responsive CSS -->
    <link type="text/css" media="screen" rel="stylesheet" href="{{asset('css/theme-responsive.css')}}"/>
    <!-- Skins Theme -->
    <link type="text/css" media="screen" rel="stylesheet" href="{{asset('css/skins/yellow/yellow.css')}}" />

    @yield('csspage')

    <!--[if IE]>
    <link rel="stylesheet" href="{{ asset('css/ie/ie.css') }}">
    <![endif]-->

    <!--[if lte IE 8]>
    <script src="{{asset('js/responsive/html5shiv.js')}}"></script>
    <script src="{{asset('js/responsive/respond.js')}}"></script>
    <![endif]-->

    <style>
        #preloader  {
            position: fixed;
            margin: 0 auto;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255,255,255,1);
            z-index: 99;
            height: 100%;
        }

        #status  {
            width: 200px;
            height: 200px;
            position: absolute;
            left: 50%;
            top: 50%;
            background-repeat: no-repeat;
            background-position: center;
            margin: -100px 0 0 -100px;
        }
    </style>
</head>
<body>

<div id="preloader">
    <img id="status" src="{{asset('img/thundrloader.gif')}}"  class="text-center">
</div>
<!-- layout-->
<div id="layout" class="layout-wide">

    <!-- Header Section-->
    <header class=" @section('is_slide') section_title @show " style="display: none" >
        <!-- nav_logo Section-->
        <div class="nav_logo animated fadeInDown">
            <div class="container">
                <div class="row">
                    <!-- Logo-->
                    <div class="col-md-3 logo">
                        <a href="{{route('homepage')}}" title="Revenir à l'accueil">
                            <img src="{{asset('css/skins/yellow/logo.svg')}}" alt="Logo" style="width: 150px;top:-9px;">
                        </a>
                    </div>
                    <!-- End Logo-->

                    <!-- Nav-->
                    <nav class="col-md-9">
                        <!-- Menu-->
                        <ul id="menu" class="sf-menu">
                            <li>
                                <a @yield('homepage_active') href="{{route('homepage')}}">ACCUEIL</a>
                            </li>
                            <li>
                                <a @yield('us_active') href="{{route('aboutpage')}}">NOUS</a>
                            </li>
                            <li>
                                <a href="{{route('servicespage')}}" @yield('services_active') >NOS SERVICES</a>
                            </li>
                            <li>
                                <a @yield('dolibarr_active') href="{{route('dolibarrpage')}}">DOLIBARR</a>
                            </li>
{{--                            <li>--}}
{{--                                <a @yield('realisations_active') href="#">NOS REALISATIONS</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a @yield('portfoliopage_active') href="{{route('portfoliopage')}}">Portfolio</a></li>--}}
{{--                                    <li><a @yield('internalworkspage_active') href="{{route('internalworkspage')}}">Travaux Internes</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li>
                                <a @yield('contact_active') href="{{route('contactpage')}}">CONTACT</a>
                            </li>
                        </ul>
                        <!-- End Menu-->
                    </nav>
                    <!-- End Nav-->
                </div>
            </div>
        </div>
        <!-- End nav_logo Section-->

        @yield('slidesection')

        @yield('section_title')
    </header>
    <!-- End Header Section-->

    @yield('breadcumbs')

    @yield('content')
    <!-- footer-->
    <footer class="footer_top">
        <div class="container">
            <div class="row">
                <!-- Social Section-->
                <div class="col-md-4">
                    <h3>SUIVEZ NOUS</h3>
                    <ul class="social">
                        <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#">Facebook</a></li>
                        <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#">Twitter</a></li>
                        <li class="github"><span><i class="fa fa-github"></i></span><a href="#">Github</a></li>
                        <li class="linkedin"><span><i class="fa fa-linkedin"></i></span><a href="#">Linkedin</a></li>
                    </ul>
                </div>
                <!-- End Social Section-->

{{--                <!-- Recent links-->--}}
{{--                <div class="col-md-4">--}}
{{--                    <h3>FLUX TWITTER</h3>--}}
{{--                    <div class="twitts"></div>--}}
{{--                </div>--}}
{{--                <!-- End Recent links-->--}}

                <!-- Recent Links -->
                <div class="col-md-4">
                    <h3>LIENS UTILES</h3>
                    <ul>
                        <li><i class="fa fa-check"></i><a href="{{route('aboutpage')}}">Nous</a></li>
                        <li><i class="fa fa-check"></i><a href="{{route('servicespage')}}">Nos Services</a></li>
                        <li><i class="fa fa-check"></i><a href="{{route('dolibarrpage')}}">Dolibarr</a></li>
                        <li><i class="fa fa-check"></i><a href="{{route('contactpage')}}">Contact</a></li>
                        {{--                            <li style="white-space:nowrap"><i class="fa fa-check"></i><a href="{{route('internalworkspage')}}">Travaux Internes</a></li>--}}
                        {{--                            <li><i class="fa fa-check"></i><a href="{{route('portfoliopage')}}">Portfolio</a></li>--}}
                    </ul>
                </div>
                <!-- End Recent Links-->

                <!-- Contact Us-->
                <div class="col-md-4">
                    <h3>CONTACTEZ NOUS</h3>
                    <ul class="contact_footer">
                        <li>
                            <i class="fa fa-envelope"></i> <a href="#">contact@thundr.fr</a>
                        </li>
                        <li>
                            <i class="fa fa-headphones"></i> <a href="#">(216) 25 102 630</a>
                        </li>
                        <li class="location">
                            <i class="fa fa-home"></i> <a href="#"> Les Berges du Lac, TN 1053</a>
                        </li>
                    </ul>
                </div>
                <!-- Contact Us-->
            </div>
        </div>
    </footer>
    <!-- End footer-->

    <!-- footer-->
    <footer class="coopring">
        <p>&copy; 2020 THUNDR. Tous les droits sont réservés.</p>
    </footer>
    <!-- End footer-->
</div>
<!-- End layout-->

<!-- ======================= JQuery libs =========================== -->
<!-- jQuery local-->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<!--Nav-->
<script type="text/javascript" src="{{asset('js/nav/tinynav.js')}}"></script>
<script type="text/javascript" src="{{asset('js/nav/superfish.js')}}"></script>
<script type="text/javascript" src="{{asset('js/nav/hoverIntent.js')}}"></script>
<script type="text/javascript" src="{{asset('js/nav/jquery.sticky.js')}}"></script>
<!--Totop-->
<script type="text/javascript" src="{{asset('js/totop/jquery.ui.totop.js')}}" ></script>
<!--Slide Revolution-->
<script type="text/javascript" src="{{asset('js/rs-plugin/js/jquery.themepunch.tools.min.js')}}" ></script>
<script type='text/javascript' src="{{asset('js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<!--owl-carousel-->
<script type="text/javascript" src="{{asset('js/carousel/owl.carousel.js')}}"></script>
<!--Ligbox-->
<script type="text/javascript" src="{{asset('js/fancybox/jquery.fancybox.pack.js')}}"></script>
<!--Gallery Grid-->
<script type="text/javascript" src="{{asset('js/gallery/modernizr.custom.26633.js')}}"></script>
<script type="text/javascript" src="{{asset('js/gallery/jquery.gridrotator.js')}}"></script>
<!--Minislider Team-->
<script type="text/javascript" src="{{asset('js/team/modernizr.custom.63321.js')}}"></script>
<script type="text/javascript" src="{{asset('js/team/jquery.catslider.js')}}"></script>
<!--Filters-->
<script type="text/javascript" src="{{asset('js/filters/jquery.isotope.js')}}" ></script>
<!--Theme Options-->
<script type="text/javascript" src="{{asset('js/theme-options/theme-options.js')}}"></script>
<script type="text/javascript" src="{{asset('js/theme-options/jquery.cookies.js')}}"></script>
<!-- Twitter Feed-->
<script type="text/javascript" src="{{asset('js/twitter/jquery.tweet.js')}}"></script>
<!-- WOW-master-->
<script type="text/javascript" src="{{asset('js/animations/wow.min.js')}}"></script>
<!-- Parallax-->
<script type="text/javascript" src="{{asset('js/parallax/jquery.inview.js')}}"></script>
<script type="text/javascript" src="{{asset('js/parallax/nbw-parallax.js')}}"></script>
<!-- Bootstrap.js-->
<script type="text/javascript" src="{{asset('js/bootstrap/bootstrap.js')}}"></script>
<!--fUNCTIONS-->
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<!-- ======================= End JQuery libs =========================== -->

<script>

</script>

<!--Slider Function-->
<script type="text/javascript">
    jQuery(window).load(function() { // makes sure the whole site is loaded
        setTimeout(function () {
            jQuery("#status").fadeOut(); // will first fade out the loading animation
            jQuery("#preloader").delay(1000).fadeOut("slow"); // will fade out the white DIV that covers the website.
            $('header').css('display','block');
            jQuery('.tp-banner').revolution(
                {
                    delay:15000,
                    startwidth:1170,
                    startheight:500,
                    hideThumbs:10,
                    fullWidth:"on",
                    fullScreen:"on",
                    fullScreenOffsetContainer: ""
                });
        }, 1000)
    });
</script>
<!--End Slider Function-->

@yield('jspage')
</body>
</html>
