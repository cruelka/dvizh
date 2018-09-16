<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Движение</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!--[if lt IE 9]>
    <script src='{{ asset("js/vendor/html5shiv.min.js")}}'></script>
    <script src='{{asset("js/vendor/respond.min.js")}}'></script>
    <![endif]-->
</head>
<body>

<!-- START: header -->

<div class="probootstrap-loader"></div>

<header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="/" class="probootstrap-logo"><img style = "width:250px;" src="{{asset("img/logo.png")}}"></a>

        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Меню</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li class="active"><a href="/page/adres">Адрес</a></li>
                <li><a href="/page/dostavka">Доставка</a></li>
                <li><a href="/page/kontakty">Контакты</a></li>
                <li><a href="/page/akcii">Акции</a></li>
            </ul>
            <div class="extra-text visible-xs">
                <!-- <a href="#" class="probootstrap-burger-menu"><i>Меню</i></a>
                 <h5>Мы в социальных сетях</h5>
                 <ul class="social-buttons">
                     <li><a href="#"><i class="icon-twitter"></i></a></li>
                     <li><a href="#"><i class="icon-facebook2"></i></a></li>
                     <li><a href="#"><i class="icon-instagram2"></i></a></li>
                 </ul>
                 -->
            </div>
        </nav>
    </div>
</header>


@yield('content')
