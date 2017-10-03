@extends('layouts.theme')
@section('content')
    <div class="site-content">


        <div class="hero">
            <div class="slides">
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

        <main class="main-content">
            <div class="fullwidth-block">
                <div class="container">
                    <div class="col-md-7" style="margin-right: 40px">
                        <b class="theme-l" style="font-size: 25px">Theme of the Year - 2017</b>

                        <div class="row">
                            <ul class="seremon-list large">
                                <li>
                                    <img src="images/thumb-1-120.png" alt="">
                                    <div class="seremon-detail">
                                        <h3 class="seremon-title"><a href="#">Enhancing Servant Leadership</a></h3>
                                        <div class="seremon-meta">
                                            <div class="pastor"><i class="fa fa-user"></i> John 9:4</div>
                                            <div class="date"><i class="fa fa-calendar"></i> Jan-Dec 2017</div>
                                        </div>
                                        <p>The bible quotation goes here</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin: 10px">
                        <b class="theme-l" style="font-size: 20px">Theme of the Month - Sep</b>

                        <div class="row">
                            <ul class="seremon-list large">
                                <li>
                                    <img src="images/thumb-1-120.png" alt="">
                                    <div class="seremon-detail">
                                        <h3 class="seremon-title"><a href="#">Enhancing Servant Leadership</a></h3>
                                        <div class="seremon-meta">
                                            <div class="pastor"><i class="fa fa-user"></i> John 9:4</div>
                                            <div class="date"><i class="fa fa-calendar"></i> Jan-Dec 2017</div>
                                        </div>
                                        <p>The bible quotation goes here</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div> <!-- .container -->
            </div> <!-- section -->

            <div class="row" style="text-align: center">
                <div class="col-md-6 col-md-offset-3">
                    <h6>Bible quite of the day</h6>
                    <h2>For God so Loved the world that HE gave his only begotten son, so that whomever..</h2>
                </div>
            </div>
            <div class="fullwidth-block">
                <div class="container">
                    <div class="row">
                        <b class="theme-l" style="font-size: 25px">Announcements / News</b>

                        <div class="row">
                            @foreach($news as $new)
                                <div class="col-md-3 col-sm-6">
                                    <div class="news">
                                        <h3 class="news-title"><a href="#">{{$new->title}}</a></h3>
                                        <p>{{$new->description}}</p>
                                        <small class="date"><i class="fa fa-calendar"></i>{{$new->dated}}</small>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main> <!-- .main-content -->
    </div>
@endsection