
@extends('layouts.app')

@section('content')

    <section class="probootstrap-half">
        <div class="image-wrap">
            <div class="image" style="background-image: url('/storage/{{$data->image}}');"></div>
        </div>
        <div class="text">

            {!!  $data->body !!}
        </div>
    </section>


@endsection
