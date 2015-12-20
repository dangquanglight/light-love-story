@extends('admin.layouts.default')

@section('title', 'Page Title')

@section('content')

<!-- Dropzone Block -->
<div class="block full">
    <!-- Dropzone Title -->
    <div class="block-title">
        <h2><strong>Dropzone.js</strong> <small>Drag and Drop files</small></h2>
    </div>
    <!-- END Dropzone Title -->

    <!-- Dropzone Content -->
    <!-- Dropzone.js, You can check out https://github.com/enyo/dropzone/wiki for usage examples -->
    <form action="page_forms_components.html" class="dropzone"></form>
    <!-- END Dropzone Content -->
</div>
<!-- END Dropzone Block -->

@stop