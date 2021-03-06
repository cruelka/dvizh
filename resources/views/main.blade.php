

@extends('layouts.app')

@section('content')

<!-- END: header -->
<div class="probootstrap-main-content">
    <section class="probootstrap-slider flexslider">
        <ul class="slides">
            <!-- class="overlay" -->
            @foreach( $posts as $post )
            <li style="background-image: url('/storage/{{$post->image}}');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="probootstrap-slider-text text-center">
                                <h1 class="probootstrap-heading probootstrap-animate mb20">{{$post->title}}</h1>
                                <div class="probootstrap-animate probootstrap-sub-wrap mb30">{!!  $post->body !!}</div>
                                <p class="probootstrap-animate"><a href="{{$post->meta_description}}" class="btn btn-ghost btn-ghost-white">{{$post->excerpt}}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
            <!-- class="overlay" -->
            <!-- class="overlay" -->

            <!-- class="overlay" -->


        </ul>
        <div class="container_scroll">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </div>

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
            <div class="image" style="background-image: url('/storage/{{$nash->first()->image}}');"></div>
        </div>
        <div class="text">
            <p class="mb10 subtitle">{{$nash->first()->meta_keywords}}</p>
            <h3 class="mt0 mb40">{{$nash->first()->title}}</h3>
            <p>{{ $nash->first()->excerpt }}.</p>
          {!!  $nash->first()->body !!}
        </div>
    </section>
    <section class="probootstrap-half reverse">
        <div class="image-wrap">
            <div class="image" style="background-image: url('/storage/{{$team->first()->image}}');"></div>
        </div>
        <div class="text">
            <p class="mb10 subtitle">{{$team->first()->meta_keywords}}</p>
            <h3 class="mt0 mb40">{{$team->first()->title}}</h3>
            <p>{{$team->first()->excerpt}}.</p>
            {!!  $team->first()->body !!}
        </div>
    </section>
    <section class="probootstrap-half">
        <div class="image-wrap">
            <div class="image" style="background-image: url('/storage/{{$services->first()->image}}');"></div>
        </div>
        <div class="text">
            <p class="mb10 subtitle">{{$services->first()->meta_keywords}}</p>
            <h3 class="mt0 mb40">{{$services->first()->title}}</h3>

           {!! $services->first()->body !!}

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
                        <h3>{{$footer->first()->title}}</h3>
                        <p>{{$footer->first()->excerpt}}</p>

                    </div>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <div class="probootstrap-footer-widget">
                        <!--
                        <h3>Мы в социальных сетях</h3>
                        <ul class="probootstrap-footer-social">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-instagram2"></i></a></li>
                        </ul>
                        -->
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
@endsection
