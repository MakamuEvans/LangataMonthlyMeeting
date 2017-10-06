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
                <div class="row effect1 box" style="margin-bottom: 20px">
                    <div class="col-md-7">
                        <h2 style="color: #1F55AB">Theme of the Year</h2>
                        <hr>
                        @if(isset($themeYear))
                            <p><b>Title: </b> {{$themeYear->title}}<br>
                                <b>Bible Verse: </b> {{$themeYear->verse}}<br>
                                {{$themeYear->description}}<br></p>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <h2 style="color: #1F55AB">Theme of the Month</h2>
                        <hr>
                        @if(isset($themeMonth))
                            <p><b>Title: </b> {{$themeMonth->title}}<br>
                                <b>Bible Verse: </b> {{$themeMonth->verse}}<br>
                                {{$themeMonth->description}}<br></p>
                        @endif
                    </div>
                </div>
                <div class="row" style="margin: 20px">
                    @foreach($sermons as $sermon)
                        <div class="row">
                            <b class="theme-l" style="font-size: 25px">{{$sermon->title}}</b>
                            <div class="row">
                                <ul class="seremon-list large">
                                    <li>
                                        <img src="images/thumb-1-120.png" alt="">
                                        <div class="seremon-detail">
                                            <div class="pastor"><i class="fa fa-user"></i> {{$sermon->verse}}</div>
                                            <br>
                                            <h3 class="seremon-title"><a href="#">{{$sermon->description}}</a></h3>
                                            <div class="seremon-meta">
                                                <div class="date"><i class="fa fa-calendar"></i> {{$sermon->type}}
                                                </div>
                                                <br>
                                                <div class="date"><i class="fa fa-calendar"></i> {{$sermon->period}}
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    {{$sermons->links()}}
                </div>
            </div>
            @include('includes.sidebar')
        </div>
    </div>
@endsection