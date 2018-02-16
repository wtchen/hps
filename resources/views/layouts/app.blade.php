<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hundred Peaks Section') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <!--[if lte IE 9]><link href="{{ asset('css/ie9.css') }}" rel="stylesheet"/><![endif]-->
    <!--[if lte IE 8]><link href="{{ asset('css/ie8.css') }}" rel="stylesheet"/><![endif]-->
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
