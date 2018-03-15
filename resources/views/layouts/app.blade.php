<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hundred Peaks Section @if (isset($title)) | {{ $title }} @endif</title>

    <!-- Mapbox -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.44.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.44.1/mapbox-gl.css' rel='stylesheet' />

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    @stack('styles')
</head>
<body>
@include('layouts.components.header')
@yield('main')
@include('layouts.components.footer')
<!-- Scripts -->
<script src="{{ asset('js/ie/html5shiv.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/skel.min.js') }}"></script>
<script src="{{ asset('js/util.js') }}"></script>
<script src="{{ asset('js/jquery.dropotron.min.js') }}"></script>
<!--[if lte IE 8]><script src="{{ asset('js/ie/respond.min.js') }}"></script><![endif]-->
<script src="{{ asset('js/main.js') }}"></script>
@stack('scripts')
</body>
</html>
