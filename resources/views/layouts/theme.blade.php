<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/elm.css')}}">
    <style>
        .theme-l {
            color: #1F55AB !important;
        }
        a{
            color: #1F55AB !important;
        }
        item:hover a{
            border-bottom-color: #1F55AB !important;
        }
    </style>

</head>
<body>
@include('includes.header')
@yield('content')
@include('includes.footer')
<!-- Scripts -->
<script src="{{url('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{url('js/plugins.js')}}"></script>
<script src="{{url('js/app.js')}}"></script>
</body>
</html>