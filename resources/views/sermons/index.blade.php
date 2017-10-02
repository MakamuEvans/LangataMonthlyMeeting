@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="{{url('images/page-head-1.jpg')}}">
        <div class="container">
            <h2 class="page-title">Sermons</h2>
        </div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="col-md-8">
                @foreach($sermons as $sermon)
                    <div class="row">
                        <b class="theme-l" style="font-size: 25px">{{$sermon->title}}</b>
                        <div class="row">
                            <ul class="seremon-list large">
                                <li>
                                    <img src="images/thumb-1-120.png" alt="">
                                    <div class="seremon-detail">
                                        <div class="pastor"><i class="fa fa-user"></i> {{$sermon->verse}}</div><br>
                                        <h3 class="seremon-title"><a href="#">{{$sermon->description}}</a></h3>
                                        <div class="seremon-meta">
                                            <div class="date"><i class="fa fa-calendar"></i> {{$sermon->type}}</div><br>
                                            <div class="date"><i class="fa fa-calendar"></i> {{$sermon->period}}</div>
                                        </div>
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