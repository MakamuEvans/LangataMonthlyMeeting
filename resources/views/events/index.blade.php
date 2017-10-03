@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="{{url('images/page-head-1.jpg')}}">
        <div class="container">
            <h2 class="page-title">Events</h2>
        </div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="col-md-8">
                @foreach($events as $event)
                    <div class="col-md-6">
                        <b class="theme-l" style="font-size: 25px">{{$event->title}}</b>
                        <div class="row">
                            <ul class="seremon-list large">
                                <li>
                                    <div class="seremon-detail">
                                        <div class="pastor"><i class="fa fa-user"></i> {{$event->description}}</div>
                                        <br>
                                        <h3 class="seremon-title"><a href="#">{{$event->dated}}</a></h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
            @include('includes.sidebar')
        </div>
    </div>
@endsection