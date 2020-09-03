<!DOCTYPE html>
<html lang="en">
<head>
    <title>Devest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('assests/front/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assests/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assests/front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assests/front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assests/front/css/flaticon.css')}}">
     {{-- begin   bootstrap--}}
    <link rel="stylesheet" href="{{asset('assests/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assests/front/css/bootstrap-rtl.css')}}">
     {{--End of bootstrap--}}
    <link rel="stylesheet" href="{{asset('assests/front/css/style.css')}}">

    {{--my edit--}}
    <link rel="stylesheet" href="{{asset('assests/front/css/rtl-style.css')}}">
    <link rel="stylesheet" href="{{asset('assests/front/css/custom.css')}}">

    {{--End my edit--}}
    {{--noty--}}
    <link rel="stylesheet" href="{{ asset('assests/front/plugins/noty/noty.css') }}">
    <script src="{{ asset('assests/front/plugins/noty/noty.min.js') }}"></script>
    <style>
        @font-face {
            font-family: Cairo;
            src: url({{'assests/front/webfonts/Cairo-Regular.ttf'}});
        }

        * {
            font-family: Cairo, sans-serif;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('front.index')}}"><img class="logo" src="{{asset('assests/front/images/logo2.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse menu-center" id="ftco-nav">
            <ul class="navbar-nav ml-auto" id="navbar-nav">
                <li class="nav-item  index active "><a href="#index" class="nav-link">الرئيسية</a></li>
                <li class="nav-item about"><a href="#about" class="nav-link"> عن الشركة</a></li>
                <li class="nav-item our-work"><a href="#our-work" class="nav-link">خدماتنا</a></li>
                <li class="nav-item projects"><a href="#projects" class="nav-link">المشاريع</a></li>
                <li class="nav-item contact"><a href="#contact" class="nav-link">تواصل معنا </a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->


