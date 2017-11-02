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
                    <div class="col-md-5"
                         style="border: 1px white solid;margin-right: 10px;text-align:center;margin-bottom: 10px;border-radius: 5px;height: 170px;overflow: hidden">
                        <div class="row" style="height: 30px;overflow: hidden">
                            <b class="theme-l" style="font-size: 25px"><u>{{$event->title}}</u></b>
                        </div>
                        <div class="row" style="margin: 10px">
                            <div class="seremon-detail">
                                <div class="pastor" style="color: white;max-height: 50px;overflow: hidden"> {!! $event->description !!}</div>
                                <br>
                                <b style="color: white;font-size: 15px"> Dated: {{$event->dated}}</b><br>
                                <a href="{{url('events/details/'.$event->id)}}" class="btn btn-success" style="background-color: #1F55AB;">More details</a>
                            </div>

                        </div>
                    </div>
                @endforeach
                {{$events->links()}}
            </div>
            @include('includes.sidebar')
        </div>
    </div>
@endsection