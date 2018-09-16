
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

@endsection
