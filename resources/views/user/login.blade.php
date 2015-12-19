<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RESTRICTED AREA</title>

    {!! Html::style('login/css/normalize.css') !!}
    {!! Html::style('login/css/animate.css', array('rel' => 'stylesheet prefetch')) !!}
    {!! Html::style('login/css/style.css') !!}
</head>

<body>

<div class="container">
    <div class="bg-img"></div>
    <div class="header">
        <div class="loading">
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
        </div>
        <h1>Our Mystery World</h1>
    </div>

    <div class="main">
        <div class="login">
            {!! Form::open(array('url' => 'auth/login','class'=>'form')) !!}

            {!! Form::password('password', array('placeholder' => 'Password', 'required')) !!}

            @foreach ($errors->all() as $error)
                <span style="color: #ffffff; font-weight: bold;">{{$error}}</span>
            @endforeach

            {!! Form::button('Sign In' , array('type' => 'submit')) !!}

            {!! Form::close() !!}
        </div>
    </div>

</div>

{!! Html::script('js/jquery.min.js') !!}

<script>
    $(function() {
        // Simulate loading
        setTimeout(function() {
            $('.container').addClass('loaded');
        }, 2000);
    });
</script>

</body>
</html>
