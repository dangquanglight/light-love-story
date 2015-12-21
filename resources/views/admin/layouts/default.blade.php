<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>

    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}">

    <!-- Stylesheets -->
    {!! Html::style('admin/css/bootstrap.min.css') !!}
    {!! Html::style('admin/css/plugins.css') !!}
    {!! Html::style('admin/css/main.css') !!}
    {!! Html::style('admin/css/themes.css') !!}
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    {!! Html::script('admin/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js') !!}

    <!-- Remember to include excanvas for IE8 chart support -->
    <!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

    {!! Html::script('admin/js/vendor/jquery-1.11.1.min.js') !!}

            <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
    {!! Html::script('admin/js/vendor/bootstrap.min.js') !!}
    {!! Html::script('admin/js/plugins.js') !!}
    {!! Html::script('admin/js/app.js') !!}
</head>

<body class="page-loading">

<!-- Preloader -->
<div class="preloader themed-background">
    <h1 class="push-top-bottom text-light text-center">
        Light <strong>Love Story</strong>
    </h1>
    <div class="inner">
        <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
        <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
    </div>
</div>
<!-- END Preloader -->

<!-- Page Container -->
<div id="page-container" class="sidebar-partial sidebar-visible-lg header-fixed-top disable-menu-autoscroll">

    <!-- Main Sidebar -->
    <div id="sidebar">@include('admin.layouts.main_sidebar')</div>
    <!-- END Main Sidebar -->

    <!-- Main Container -->
    <div id="main-container">

        <!-- Header -->
        <header class="navbar navbar-default navbar-fixed-top">
            <!-- Left Header Navigation -->
            <ul class="nav navbar-nav-custom">
                <!-- Main Sidebar Toggle Button -->
                <li>
                    <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                        <i class="fa fa-bars fa-fw"></i>
                    </a>
                </li>
                <!-- END Main Sidebar Toggle Button -->
            </ul>
            <!-- END Left Header Navigation -->

        </header>
        <!-- END Header -->

        <!-- Page content -->
        <div id="page-content">
            <!-- Page Header -->
            @include('admin.layouts.page_header')
            @include('admin.layouts.breadcrumb')
            <!-- END Page Header -->

            @yield('content')
        </div>
        <!-- END Page Content -->

        <!-- Footer -->
        <footer class="clearfix">
            <div class="pull-left">
                <span id="year-copy"></span> &copy; Powered by Light Corp
            </div>
        </footer>
        <!-- END Footer -->

    </div>
    <!-- END Main Container -->

</div>
<!-- END Page Container -->

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

</body>
</html>