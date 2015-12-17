<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login/Logout animation concept</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>

    {!! Html::style('login/css/style.css') !!}

</head>

<body>

<div class="cont">
    <div class="demo">
        <div class="login">
            <div class="login__check"></div>
            {!! Html::ul($errors->all(), array('class'=>'alert alert-danger errors')) !!}
            <div class="login__form">
                {!! Form::open(array('url' => 'auth/login','class'=>'form')) !!}
                <div class="login__row">
                    <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                        <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8"/>
                    </svg>
                    {!! Form::text('email', null, array('class' => 'login__input name','placeholder' => 'Username')) !!}
                </div>
                <div class="login__row">
                    <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                        <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0"/>
                    </svg>
                    {!! Form::password('password', array('class' => 'login__input pass','placeholder' => 'Password')) !!}
                </div>
                {!! Form::submit('Sign In' , array('class' => 'login__submit')) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

</body>
</html>
