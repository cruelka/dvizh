
@extends('layouts.app')

@section('content')


    <section class="probootstrap-section probootstrap-bg-white">
        <div class="container-fluid">
            <div class="section-heading text-center">
                <h2 class="mt0 mb0">{{ $data->title}}</h2>
                <div class="text">
                  <div style="padding:15px;">  {!!  $data->body !!} </div>

                </div>
        </div>
    </section>
    <div class="probootstrap-footer-spacer"></div>
    <footer class="probootstrap-footer">
        <div class="probootstrap-footer-section">
            <div class="container">
                <div class="row mb80">
                    <div class="col-md-4">
                        <div class="probootstrap-footer-widget">
                            <h3>{{$footer->title}}</h3>
                            <p>{{$footer->excerpt}}</p>

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
