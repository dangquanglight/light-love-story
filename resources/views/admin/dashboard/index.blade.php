@extends('admin.layouts.default')

@section('title', 'Page Title')

@section('content')
    <div class="block">
        <!-- Usage Title -->
        <div class="block-title">
            <h2><strong>Usage</strong></h2>
        </div>
        <!-- END Usage Title -->

        <!-- Usage Content -->
        <div class="row">
            <div class="col-md-6">
                <p>Just use the class of the icon you want in a <code>&lt;i&gt;</code> element and you are ready to go! You can use it inside any element like a button and it will inherit it's font size and color.</p>
                <p>You can also use the classes <code>.fa-2x</code> <code>.fa-3x</code> <code>.fa-4x</code> <code>.fa-5x</code> for a bigger icon if you like so!</p>
            </div>
            <div class="col-md-6 text-center">
                <p><i class="gi gi-airplane"></i></p>
                <p><code>gi gi-airplane</code></p>
                <p><i class="gi gi-airplane fa-5x text-info"></i></p>
                <p><code>gi gi-airplane fa-5x text-info</code></p>
            </div>
        </div>
        <!-- END Usage Content -->
    </div>
@stop