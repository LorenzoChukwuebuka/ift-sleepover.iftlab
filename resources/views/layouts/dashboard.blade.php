
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Find Houses - HTML5 Template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset("css/jquery-ui.css")}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset("css/fontawesome-all.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/fontawesome-5-all.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{asset("css/leaflet.css")}}">
    <link rel="stylesheet" href="{{asset("css/leaflet-gesture-handling.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/leaflet.markercluster.css")}}">
    <link rel="stylesheet" href="{{asset("css/leaflet.markercluster.default.css")}}">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="{{asset("revolution/css/settings.css")}}">
    <link rel="stylesheet" href="{{asset("revolution/css/layers.css")}}">
    <link rel="stylesheet" href="{{asset("revolution/css/navigation.css")}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset("css/search.css")}}">
    <link rel="stylesheet" href="{{asset("css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("css/aos.css")}}">
    <link rel="stylesheet" href="{{asset("css/aos2.css")}}">
    <link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("css/lightcase.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/menu.css")}}">
    <link rel="stylesheet" href="{{asset("css/slick.css")}}">
    <link rel="stylesheet" href="{{asset("css/styles.css")}}">
    <link rel="stylesheet" href="{{asset("css/maps.css")}}">
    <link rel="stylesheet" id="color" href="{{asset("css/colors/pink.css")}}">
    {{--<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}
</head>

<body class="inner-pages maxw1600 m0a dashboard-bd">
<!-- Wrapper -->
<div id="wrapper" class="int_main_wraapper">
    <!-- START SECTION HEADINGS -->
    <!-- Header Container
    ================================================== -->
    <div class="dash-content-wrap">
        <header id="header-container" class="db-top-header">
            <!-- Header -->
            <div id="header">
                <div class="container-fluid">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="{{route("index")}}"><img src="{{asset("images/logo.svg")}}" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                    <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                    </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a href="#">Home</a>

                                </li>

                                <li><a href="contact-us.html">Contact</a></li>

                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->
                    <!-- Right Side Content / -->
                    <div class="header-user-menu user-menu">
                        <div class="header-user-name">
                            <span><img src="{{asset("images/testimonials/ts-1.jpg")}}" alt=""></span>Hi, {{$user->first_name}}
                        </div>
                        <ul>
                            <li><a href="{{route("profile")}}"> Edit profile</a></li>
                            @if($type != "user")
                            <li><a href="{{route("add-space")}}"> Add Property</a></li>
                            @endif
                            <li><a href="change-password.html"> Change Password</a></li>
                            <li><a href="{{route("logout")}}">Log Out</a></li>
                        </ul>
                    </div>
                    <!-- Right Side Content / End -->
                </div>
            </div>
            <!-- Header / End -->
        </header>
    </div>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    <!-- START SECTION DASHBOARD -->
    <section class="user-page section-padding pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                    <div class="user-profile-box mb-0">
                        <div class="sidebar-header"><img src="{{asset("images/logo-blue.svg")}}" alt="header-logo2.png"> </div>
                        <div class="header clearfix">
                            <img src="{{asset("images/testimonials/ts-1.jpg")}}" alt="avatar" class="img-fluid profile-img">
                        </div>
                        <div class="active-user">
                            <h2>{{$user->first_name}} {{$user->last_name}}</h2>
                        </div>
                        <div class="detail clearfix">
                            <ul class="mb-0">
                                @if($type == "user")
                                <li>
                                    <a href="{{route("dashboard")}}" class="@if($routeName == "dashboard") active @endif">
                                        <i class="fa fa-map-marker"></i> Dashboard
                                    </a>
                                </li>
                                @else
                                    <li>
                                        <a href="{{route("vendor-dashboard")}}" class="@if($routeName == "vendor-dashboard") active @endif">
                                            <i class="fa fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                @endif
                                <li>
                                    <a class="@if($routeName == "profile") active @endif" href="{{route("profile")}}">
                                        <i class="fa fa-user"></i>Profile
                                    </a>
                                </li>
                                    @if($type != "user")
                                <li>
                                    <a href="my-listings.html">
                                        <i class="fa fa-list" aria-hidden="true"></i>My Properties
                                    </a>
                                </li>
                                    @endif
                                @if($type != "user")
                                <li>
                                    <a class="@if($routeName == "add-space") active @endif" href="{{route("add-space")}}">
                                        <i class="fa fa-list" aria-hidden="true"></i>Add Property
                                    </a>
                                </li>
                                @endif
                                <li>
                                    <a class="@if($routeName == "change-password") active @endif" href="{{route("change-password")}}">
                                        <i class="fa fa-lock"></i>Change Password
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route("logout")}}">
                                        <i class="fas fa-sign-out-alt"></i>Log Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
                @include("flash-message")
                @yield("content")
            </div>
        </div>
    </section>
    <!-- END SECTION DASHBOARD -->

    <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->

    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->

    <!-- ARCHIVES JS -->
    <script src="{{asset("js/jquery-3.5.1.min.js")}}"></script>
    <script src="{{asset("js/rangeSlider.js")}}"></script>
    <script src="{{asset("js/tether.min.js")}}"></script>
    <script src="{{asset("js/moment.js")}}"></script>
    <script src="{{asset("js/bootstrap.min.js")}}"></script>
    <script src="{{asset("js/mmenu.min.js")}}"></script>
    <script src="{{asset("js/mmenu.js")}}"></script>
    <script src="{{asset("js/aos.js")}}"></script>
    <script src="{{asset("js/aos2.js")}}"></script>
    <script src="{{asset("js/slick.min.js")}}"></script>
    <script src="{{asset("js/fitvids.js")}}"></script>
    <script src="{{asset("js/jquery.waypoints.min.js")}}"></script>
    <script src="{{asset("js/typed.min.js")}}"></script>
    <script src="{{asset("js/jquery.counterup.min.js")}}"></script>
    <script src="{{asset("js/imagesloaded.pkgd.min.js")}}"></script>
    <script src="{{asset("js/isotope.pkgd.min.js")}}"></script>
    <script src="{{asset("js/smooth-scroll.min.js")}}"></script>
    <script src="{{asset("js/lightcase.js")}}"></script>
    <script src="{{asset("js/search.js")}}"></script>
    <script src="{{asset("js/owl.carousel.js")}}"></script>
    <script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
    <script src="{{asset("js/ajaxchimp.min.js")}}"></script>
    <script src="{{asset("js/newsletter.js")}}"></script>
    <script src="{{asset("js/jquery.form.js")}}"></script>
    <script src="{{asset("js/jquery.validate.min.js")}}"></script>
    <script src="{{asset("js/searched.js")}}"></script>
    <script src="{{asset("js/forms-2.js")}}"></script>
    <script src="{{asset("js/leaflet.js")}}"></script>
    <script src="{{asset("js/leaflet-gesture-handling.min.js")}}"></script>
    <script src="{{asset("js/leaflet-providers.js")}}"></script>
    <script src="{{asset("js/leaflet.markercluster.js")}}"></script>
    <script src="{{asset("js/map-style2.js")}}"></script>
    <script src="{{asset("js/range.js")}}"></script>
    <script src="{{asset("js/color-switcher.js")}}"></script>
    <script>

    <script>
        $(".header-user-name").on("click", function() {
            $(".header-user-menu ul").toggleClass("hu-menu-vis");
            $(this).toggleClass("hu-menu-visdec");
        });

    </script>

    <!-- Slider Revolution scripts -->
    <script src="{{asset("revolution/js/jquery.themepunch.tools.min.js")}}"></script>
    <script src="{{asset("revolution/js/jquery.themepunch.revolution.min.js")}}"></script>
    <script src="{{asset("revolution/js/extensions/revolution.extension.actions.min.js")}}"></script>
    <script src="{{asset("revolution/js/extensions/revolution.extension.carousel.min.js")}}"></script>
    <script src="{{asset("revolution/js/extensions/revolution.extension.kenburn.min.js")}}"></script>
    <script src="{{asset("revolution/js/extensions/revolution.extension.layeranimation.min.js")}}"></script>
    <script src="{{asset("revolution/js/extensions/revolution.extension.migration.min.js")}}"></script>
    <script src="{{asset("revolution/js/extensions/revolution.extension.navigation.min.js")}}"></script>
    <script src="{{asset("revolution/js/extensions/revolution.extension.parallax.min.js")}}"></script>
    <script src="{{asset("revolution/js/extensions/revolution.extension.slideanims.min.js")}}"></script>
    <script src="{{asset("revolution/js/extensions/revolution.extension.video.min.js")}}"></script>

    <!-- MAIN JS -->
    <script src="{{asset("js/script.js")}}"></script>
    @yield("custom-script")


</div>
<!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jun 2021 12:45:14 GMT -->
</html>
