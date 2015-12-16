<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Bootstrap 3.2 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <!-- Font Awesome 4.2.0 -->
    <link href="css/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- ilove Font 1.0 -->
    <link href="css/ilove/font-ilove.css" rel="stylesheet">
    <!-- Animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style-blue.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

@yield('content')

<!-- Preloader -->
<div id="preloader">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>

<!--Carousel-->
@include('layouts.top_carousel');

<div id="about"></div>
<!--Navbar-->
@include('layouts.nav_bar');

<!--Adam & EVE Section-->
@include('layouts.about_us');

<!--Family Section-->
@include('layouts.family');

<!--Big Moments-->
@include('layouts.moments');

<!--Favourites List-->
@include('layouts.favourites_list');

<!--Blog Section-->
@include('layouts.blog');

<!--Contact Section-->
@include('layouts.contact_us');

<!--Footer Section-->
@include('layouts.footer');

<!-- Al JS Plugins -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/annyang.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/smoothscrolling.js"></script>
<script src="js/custom.js"></script>
<script src="js/fss.js"></script>
<script src="js/geo.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/slide-fade-content.js"></script>
<script src="js/twitter/jquery.tweet.js"></script>
<script src="js/prefixfree.js"></script>
<script src="js/countup.js"></script>
<script src="js/modernizr.hover.js"></script>
</body>
</html>

