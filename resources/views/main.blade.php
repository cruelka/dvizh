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
        <a href="/" class="probootstrap-logo"><img style = "width:50px;" src="{{asset("img/logo.png")}}"><span>вижение</span></a>

        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Меню</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li class="active"><a href="/">Адрес</a></li>
                <li><a href="/">Доставка</a></li>
                <li><a href="/">Контакты</a></li>
                <li><a href="/">Акции</a></li>
            </ul>
            <div class="extra-text visible-xs">
                <a href="#" class="probootstrap-burger-menu"><i>Меню</i></a>
                <h5>Мы в социальных сетях</h5>
                <ul class="social-buttons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-instagram2"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- END: header -->
<div class="probootstrap-main-content">
    <section class="probootstrap-slider flexslider">
        <ul class="slides">
            <!-- class="overlay" -->
            <li style="background-image: url({{asset("img/slider_1.jpg")}});">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="probootstrap-slider-text text-center">
                                <h1 class="probootstrap-heading probootstrap-animate mb20">Образец текста</h1>
                                <div class="probootstrap-animate probootstrap-sub-wrap mb30">Заливается в админке</div>
                                <p class="probootstrap-animate"><a href="#" class="btn btn-ghost btn-ghost-white">ссылка к описанию</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- class="overlay" -->

        </ul>
    </section>
    <section class="probootstrap-section probootstrap-bg-white">
        <div class="container-fluid">
            <div class="section-heading text-center">
                <h2 class="mt0 mb0">О компании</h2>
            </div>
        </div>
    </section>
    <section class="probootstrap-half">
        <div class="image-wrap">
            <div class="image" style="background-image: url({{asset("img/slider_7.jpg")}});"></div>
        </div>
        <div class="text">
            <p class="mb10 subtitle">Наш магазин</p>
            <h3 class="mt0 mb40">Движение канцтовары</h3>
            <p>Короткое описание.</p>
            <p class="mb50">Еще параграф описания.</p>
            <p> <a href="https://www.office-zakaz.ru/" class="btn btn-primary mb10">Перейти</a></p>
        </div>
    </section>
    <section class="probootstrap-half reverse">
        <div class="image-wrap">
            <div class="image" style="background-image: url({{asset("img/slider_6.jpg")}});"></div>
        </div>
        <div class="text">
            <p class="mb10 subtitle">Мы - Движение</p>
            <h3 class="mt0 mb40">Встречайте нашу команду</h3>
            <p>Описание работников.</p>
            <p class="mb50">Описание.</p>
        </div>
    </section>
    <section class="probootstrap-half">
        <div class="image-wrap">
            <div class="image" style="background-image: url({{asset("img/slider_2.jpg")}});"></div>
        </div>
        <div class="text">
            <p class="mb10 subtitle">Наши услуги</p>
            <h3 class="mt0 mb40">Что мы предлагаем</h3>
            <div class="row mb20">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="service-item">
                        <span class="number">1</span>
                        <h4 class="mt0">Наклейки</h4>
                        <p>Описание.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="service-item">
                        <span class="number">2</span>
                        <h4 class="mt0">Канцелярские товары</h4>
                        <p>Описание.</p>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="service-item">
                        <span class="number">3</span>
                        <h4 class="mt0">Услуга</h4>
                        <p>Описание.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
        <div class="container">
            <!-- END row -->
            <div class="row">
                <div class="col-md-12 probootstrap-animate">
                    <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth mt50">
                        <div class="item">

                            <div class="probootstrap-testimony-wrap">
                                <figure>
                                    <img src="{{asset("img/person_1.jpg")}}" alt="Free Bootstrap Template by uicookies.com">
                                </figure>
                                <blockquote class="quote">Текст отзыва <cite class="author">&mdash; Человек <br> <span>Звание человека</span></cite></blockquote>
                            </div>

                        </div>
                        <div class="item">
                            <div class="probootstrap-testimony-wrap">
                                <figure>
                                    <img src="{{asset("img/person_1.jpg")}}" alt="Free Bootstrap Template by uicookies.com">
                                </figure>
                                <blockquote class="quote">Текст отзыва <cite class="author">&mdash; Человек <br> <span>Звание человека</span></cite></blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="probootstrap-testimony-wrap">
                                <figure>
                                    <img src="{{asset("img/person_1.jpg")}}" alt="Free Bootstrap Template by uicookies.com">
                                </figure>
                                <blockquote class="quote">Текст отзыва <cite class="author">&mdash; Человек <br> <span>Звание человека</span></cite></blockquote>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END row -->
        </div>
    </section>
</div>

<div class="probootstrap-footer-spacer"></div>
<footer class="probootstrap-footer">
    <div class="probootstrap-footer-section">
        <div class="container">
            <div class="row mb80">
                <div class="col-md-4">
                    <div class="probootstrap-footer-widget">
                        <h3>Информация</h3>
                        <p>Небольшой текст о компании.</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="probootstrap-link-wrap probootstrap-footer-widget">
                        <h3>Услуги</h3>
                        <ul>
                            <li><a href="#">Наклейки</a></li>
                            <li><a href="#">Магазин</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="probootstrap-footer-widget">
                        <h3>Мы в социальных сетях</h3>
                        <ul class="probootstrap-footer-social">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-instagram2"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="text-center">&copy; Движение <i class="icon-heart2"></i> </p>
            </div>
        </div>
    </div>
</footer>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
</div>


<script src="{{asset("js/scripts.min.js")}}"></script>
<script src="{{asset("js/main.min.js")}}"></script>
<script src="{{asset("js/custom.js")}}"></script>

</body>
</html>