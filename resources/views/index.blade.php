@extends('layouts.theme')
@section('content')
    <div class="site-content">


        <div class="hero col-md-12">
            <div class="slides">
                <div class="row">
                    <li data-bg-image="images/church.jpg" style="opacity: 0.3">
                        <div class="container">
                            <div class="slide-content">
                            </div>
                        </div>
                    </li>

                    <li data-bg-image="images/slide-1.jpg">
                        <div class="container">
                            <div class="slide-content">

                            </div>
                        </div>
                    </li>
                </div>

            </div>
        </div>

        <main class="main-content">
            <div class="fullwidth-block">
                <div class="container" style="margin-top: 10px">
                    <div class="col-md-12 effect1 box">
                        <div class="col-md-7" style="margin-right: 40px">
                            <b class="theme-l" style="font-size: 25px">Theme of the Year - {{date('Y')}}</b>

                            <div class="row">
                                <ul class="seremon-list large">
                                    @if(isset($themeYear))
                                        <li>
                                            <img src="images/thumb-1-120.png" alt="">
                                            <div class="seremon-detail">
                                                <h3 class="seremon-title"><a href="#">{{$themeYear->title}}</a></h3>
                                                <div class="seremon-meta">
                                                    <div class="pastor"><i class="fa fa-user"></i> {{$themeYear->verse}}
                                                    </div>
                                                    <div class="date"><i
                                                                class="fa fa-calendar"></i> {{$themeYear->period}}</div>
                                                </div>
                                                <p>{{$themeYear->description}}</p>
                                            </div>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin: 10px">
                            <b class="theme-l" style="font-size: 20px">Theme of the Month - {{date('M')}}</b>

                            <div class="row">
                                <ul class="seremon-list large">
                                    @if(isset($themeMonth))
                                        <li>
                                            <img src="images/thumb-1-120.png" alt="">
                                            <div class="seremon-detail">
                                                <h3 class="seremon-title"><a href="#">{{$themeMonth->title}}</a></h3>
                                                <div class="seremon-meta">
                                                    <div class="pastor"><i
                                                                class="fa fa-user"></i> {{$themeMonth->verse}}
                                                    </div>
                                                    <div class="date"><i
                                                                class="fa fa-calendar"></i> {{$themeMonth->period}}
                                                    </div>
                                                </div>
                                                <p>{{$themeMonth->description}}</p>
                                            </div>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>


                </div> <!-- .container -->
            </div> <!-- section -->

            <div class="row" style="text-align: center">
                <div class="col-md-6 col-md-offset-3">
                    <h6>Bible quote of the day</h6>
                    <h2 style="color: #1F55AB">
                        @if(isset($quote))
                            {{$quote->description}}
                        @endif
                    </h2>
                </div>
            </div>
            <div class="fullwidth-block">
                <div class="container effect1 box">
                    <div class="col-md-12">
                        <b class="theme-l" style="font-size: 25px">Announcements / News</b>

                        <div class="col-md-12">
                            @foreach($news as $new)
                                <div class="col-md-3 col-sm-6" style="padding: 10px">
                                    <div class="news" style="border: double 1px #1F55AB">
                                        <h3 class="news-title"><a href="#">{{$new->title}}</a></h3>
                                        <p>{{$new->description}}</p>
                                        <small class="date"><i class="fa fa-calendar"></i>{{$new->dated}}</small>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-12" style="text-align: center">
                            <a style="color: #1F55AB" href="{{url('events')}}">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </main> <!-- .main-content -->
    </div>
@endsection