<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Friend's Church(Quakres) Langata Monthly Meeting</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/elm.css')}}">
    <link href="{{url("plugins/flexslider/flexslider.css")}}" rel="stylesheet" media="screen" />

    <style type="text/css">
        .flex-caption {
            width: 100%;
            padding: 2%;
            left: 0;
            bottom: 0;
            background: rgba(0,0,0,.5);
            color: #fff;
            text-shadow: 0 -1px 0 rgba(0,0,0,.3);
            font-size: 14px;
            line-height: 18px;
            text-align: center;
        }
    </style>s
    <style>
        .mySlides {display:none;}
    </style>
    <style>
        .theme-l {
            color: #1F55AB !important;
        }

        a {
            color: white !important;
        }

        item:hover a {
            border-bottom-color: #1F55AB !important;
        }
        li a.menu-item{
            color: white !important;
        }
        .current-menu-item a {
            color: white !important;
        }
    </style>

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=458817457575935";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
@include('includes.header')
@yield('content')
@include('includes.footer')
<!-- Scripts -->
<script src="{{url('js/jquery-1.11.1.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{url("plugins/flexslider/jquery.flexslider-min.js")}}"></script>
<script src="{{url("plugins/flexslider/flexslider.config.js")}}"></script><script src="{{url('js/plugins.js')}}"></script>
<script src="{{url('js/app.js')}}"></script>

<script>
    $(window).load(function() {
        $('.flexslider').flexslider();
    });
    $(window).load(function() {
        $('.flexslider2').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>

</body>
</html>
