<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Bootstrap 3.2 -->
    {!! Html::style('css/bootstrap.min.css') !!}
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <!-- Font Awesome 4.2.0 -->
    {!! Html::style('css/font-awesome-4.2.0/css/font-awesome.min.css') !!}
    <!-- ilove Font 1.0 -->
    {!! Html::style('css/ilove/font-ilove.css') !!}
    <!-- Animate -->
    {!! Html::style('css/animate.css') !!}
    <!-- Magnific popup -->
    {!! Html::style('css/magnific-popup.css') !!}
    <!-- Owl stylesheet -->
    {!! Html::style('css/owl.carousel.css') !!}
    {!! Html::style('css/owl.theme.css') !!}
    <!-- Custom Style -->
    {!! Html::style('css/style-blue.css') !!}
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
<div id="myCarousel" class="carousel slide carousel-fade">@include('layouts.top_carousel')</div>

<div id="about"></div>

<!--Navbar-->
<div class="topbar-nav">@include('layouts.nav_bar')</div>

<!--Adam & EVE Section-->
<section id="aboutthem" class="white">@include('layouts.about_us')</section>

<!--Family Section-->
<section id="family" class="white">@include('layouts.family')</section>

<!--Big Moments-->
<section id="moments">@include('layouts.moments')</section>

<!--Favourites List-->
<section id="favourites" class="white">@include('layouts.favourites_list')</section>

<!--Blog Section-->
<section id="blog" class="white">@include('layouts.blog')</section>

<!--Contact Section-->
<section id="contactus" class="white contact">@include('layouts.contact_us')</section>

<!--Footer Section-->
<section class="footer">@include('layouts.footer')</section>

<!-- Al JS Plugins -->
{!! Html::script('js/modernizr.custom.js') !!}
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/jquery-ui.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/jquery.easing.min.js') !!}
{!! Html::script('js/jquery.sticky.js') !!}
{!! Html::script('js/jquery.parallax.js') !!}
{!! Html::script('js/masonry.pkgd.min.js') !!}
{!! Html::script('js/annyang.min.js') !!}
{!! Html::script('js/wow.min.js') !!}
{!! Html::script('js/waypoints.min.js') !!}
{!! Html::script('js/smoothscrolling.js') !!}
{!! Html::script('js/custom.js') !!}
{!! Html::script('js/fss.js') !!}
{!! Html::script('js/geo.js') !!}
{!! Html::script('js/jquery.countTo.js') !!}
{!! Html::script('js/jquery.mixitup.min.js') !!}
{!! Html::script('js/imagesloaded.pkgd.min.js') !!}
{!! Html::script('js/owl.carousel.min.js') !!}
{!! Html::script('js/jquery.magnific-popup.min.js') !!}
{!! Html::script('js/slide-fade-content.js') !!}
{!! Html::script('js/twitter/jquery.tweet.js') !!}
{!! Html::script('js/prefixfree.js') !!}
{!! Html::script('js/countup.js') !!}
{!! Html::script('js/modernizr.hover.js') !!}
</body>
</html>

