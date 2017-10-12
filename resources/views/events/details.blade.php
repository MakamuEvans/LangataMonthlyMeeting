@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="{{url('images/page-head-1.jpg')}}">
        <div class="container">
            <h2 class="page-title">Events/{{$event->title}}</h2>
        </div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="col-md-8">
                <h2 style="color: white">{{$event->title}}</h2>
                <h6 style="color: white"><b>Dated: </b>{{$event->dated}}</h6>
                <div style="color: white">
                    @if(!is_null($event->description))
                        {!! $event->description !!}
                    @else
                        No details provided
                    @endif
                </div>
            </div>
            @include('includes.sidebar')
        </div>
    </div>
@endsection