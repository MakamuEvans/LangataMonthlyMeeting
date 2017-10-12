@extends('layouts.theme')
@section('content')
    <div class="site-content">

        <main class="main-content">
            <div class="fullwidth-block" style="padding: 0px">
                <div class="container">
                    <div class="col-md-12">
                        <div class="hero">
                            <div class="slides">
                                <li data-bg-image="{{url('images/church.jpg')}}">
                                    <div class="container">
                                        <div class="slide-content">
                                            <small class="slide-subtitle">.</small>
                                            <h1 class="slide-title">.</h1>

                                            <b style="color: white;font-size: 40px;background-color: #1F55AB">Our
                                                Church</b>
                                        </div>
                                    </div>
                                </li>

                                <li data-bg-image="images/front.jpg">
                                    <div class="container">
                                        <div class="slide-content">
                                            <small class="slide-subtitle">.</small>
                                            <h1 class="slide-title">.</h1>

                                            <b style="color: white;font-size: 40px;background-color: #1F55AB">Friends'
                                                Church (Quakers) Langata</b>
                                        </div>
                                    </div>
                                </li>
                                <li data-bg-image="images/inside.jpg">
                                    <div class="container">
                                        <div class="slide-content">
                                            <small class="slide-subtitle">.</small>
                                            <h1 class="slide-title">.</h1>

                                            <b style="color: white;font-size: 40px;background-color: #1F55AB">Our Church
                                                Pavilion</b>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <main class="main-content">
            <div class="fullwidth-block">
                <div class="container" style="margin-top: 10px">
                    <div class="col-md-12 effect1 box">
                        <div class="col-md-7" style="margin-right: 40px">
                            <b class="theme-l" style="font-size: 25px"><u>Theme of the Year - {{date('Y')}}</u></b>

                            <div class="row">
                                <ul class=" large">
                                    @if(isset($themeYear))

                                        <div class="seremon-detail" style="padding: 10px">
                                            <b class="" style="font-size: 20px">Title: {{$themeYear->title}}</b>
                                            <div class="seremon-meta">
                                                <div class="pastor"><i
                                                            class="fa fa-user"></i>Verse: {{$themeYear->verse}}
                                                </div>
                                                <div class="date"><i
                                                            class="fa fa-calendar"></i>Period: {{$themeYear->period}}
                                                </div>
                                            </div>
                                            <p>Brief: {{$themeYear->description}}</p>
                                        </div>

                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin: 10px">
                            <b class="theme-l" style="font-size: 20px"><u>Theme of the Month - {{date('M')}}</u></b>

                            <div class="row">
                                <ul class=" large">
                                    @if(isset($themeMonth))
                                        <div class="seremon-detail" style="padding: 10px">
                                            <b class="" style="font-size: 20px">Title: {{$themeMonth->title}}</b>
                                            <div class="seremon-meta">
                                                <div class="pastor"><i
                                                            class="fa fa-user"></i>Verse: {{$themeMonth->verse}}
                                                </div>
                                                <div class="date"><i
                                                            class="fa fa-calendar"></i>Period: {{$themeMonth->period}}
                                                </div>
                                            </div>
                                            <p>Brief: {{$themeMonth->description}}</p>
                                        </div>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>


                </div> <!-- .container -->
            </div> <!-- section -->

            <div class="row" style="text-align: center">
                <div class="col-md-6 col-md-offset-3">
                    <h6 style="color: black">Bible quote of the day</h6>
                    <h2 style="color: white">
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
                                    <div class="news" style="border: double 1px #1F55AB;border-radius: 5px">
                                        <b class="news-title" style="font-size: 15px;color: #1F55AB">{{$new->title}}</b><br>
                                        <small style="color: red" class="date">{{$new->dated}}</small><br>
                                        <hr>
                                        <a href="{{url('events/details/'.$new->id)}}" class="pull-right" style="background-color: #1F55AB;">More details</a>
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