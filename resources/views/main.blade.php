

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
            <div class="image" style="background-image: url('/storage/{{$nash->image}}');"></div>
        </div>
        <div class="text">
            <p class="mb10 subtitle">Наш магазин</p>
            <h3 class="mt0 mb40">{{$nash->title}}</h3>
            <p>{{ $nash->excerpt }}.</p>
          {!!  $nash->body !!}
            <p> <a href="https://www.office-zakaz.ru/" class="btn btn-primary mb10">Перейти</a></p>
        </div>
    </section>
    <section class="probootstrap-half reverse">
        <div class="image-wrap">
            <div class="image" style="background-image: url('/storage/{{$team->image}}');"></div>
        </div>
        <div class="text">
            <p class="mb10 subtitle">Мы - Движение</p>
            <h3 class="mt0 mb40">{{$team->title}}</h3>
            <p>{{$team->excerpt}}.</p>
            {!!  $team->body !!}
        </div>
    </section>
    <section class="probootstrap-half">
        <div class="image-wrap">
            <div class="image" style="background-image: url('/storage/{{$services->image}}');"></div>
        </div>
        <div class="text">
            <p class="mb10 subtitle">Наши услуги</p>
            <h3 class="mt0 mb40">{{$services->title}}</h3>

           {!! $services->body !!}

        </div>
    </section>


</div>

@endsection
