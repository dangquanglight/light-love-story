<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>
<html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>RESTRICTED AREA</title>

    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    {!! Html::style('admin/css/bootstrap.min.css') !!}

    <!-- Related styles of various icon packs and plugins -->
    {!! Html::style('admin/css/plugins.css') !!}

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    {!! Html::style('admin/css/main.css') !!}

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    {!! Html::style('admin/css/themes.css') !!}
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    {!! Html::script('admin/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js') !!}
</head>
<body>

<!-- Login Container -->
<div id="login-container" class="animation-fadeIn">
    <!-- Login Title -->
    <div class="login-title text-center">
        <h1>
            <i class="gi gi-flash"></i> <strong>RESTRICTED AREA</strong><br>
        </h1>
    </div>
    <!-- END Login Title -->

    <!-- Login Block -->
    <div class="block push-bit">

        @foreach ($errors->all() as $error)
            <span style="color: red; font-weight: bold;">{{$error}}</span>
        @endforeach

        <!-- Login Form -->
        {!! Form::open(array('url' => route('systems_login'),'id'=>'form-login', 'class' => 'form-horizontal form-bordered form-control-borderless')) !!}

            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="gi gi-skull" style="font-size: 30px;"></i>
                        </span>

                        {!! Form::text('username', null, array('class' => 'form-control input-lg')) !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="gi gi-eye_open" style="font-size: 30px;"></i>
                        </span>

                        {!! Form::password('password', array('class' => 'form-control input-lg')) !!}
                    </div>
                </div>
            </div>

            <div class="form-group form-actions">
                <div class="col-xs-4">

                </div>
                <div class="col-xs-8 text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-angle-right"></i>
                        Login to Dashboard
                    </button>
                </div>
            </div>

        {!! Form::close() !!}
        <!-- END Login Form -->

    </div>
    <!-- END Login Block -->

    <!-- Footer -->
    <footer class="text-muted text-center">
        <small><span id="year-copy"></span> &copy; Powered by Light Corp</small>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Login Container -->

{!! Html::script('admin/js/vendor/jquery-1.11.1.min.js') !!}

<!-- Bootstrap.js, Jquery plugins and Custom JS code -->
{!! Html::script('admin/js/vendor/bootstrap.min.js') !!}
{!! Html::script('admin/js/plugins.js') !!}
{!! Html::script('admin/js/app.js') !!}

<!-- Load and execute javascript code used only in this page -->
{!! Html::script('admin/js/pages/login.js') !!}

<script>
    $(function () {
        Login.init();
    });
</script>

</body>
</html>