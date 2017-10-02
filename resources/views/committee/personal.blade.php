@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="{{url('images/page-head-1.jpg')}}">
        <div class="container">
            <h2 class="page-title">Mission/Personal</h2>
        </div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="news">
                            <image class="news-image" src="{{url('images/news-thumb-1.jpg')}}"></image>
                            <h3 class="news-title"><a href="#">First Name, Last Name</a></h3>
                            <h3 class="news-title"><a href="#">Position</a></h3>
                            <small class="date"><i class="fa fa-calendar"></i>Contact details</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="news">
                            <image class="news-image" src="{{url('images/news-thumb-1.jpg')}}"></image>
                            <h3 class="news-title"><a href="#">First Name, Last Name</a></h3>
                            <h3 class="news-title"><a href="#">Position</a></h3>
                            <small class="date"><i class="fa fa-calendar"></i>Contact details</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="news">
                            <image class="news-image" src="{{url('images/news-thumb-1.jpg')}}"></image>
                            <h3 class="news-title"><a href="#">First Name, Last Name</a></h3>
                            <h3 class="news-title"><a href="#">Position</a></h3>
                            <small class="date"><i class="fa fa-calendar"></i>Contact details</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="news">
                            <image class="news-image" src="{{url('images/news-thumb-1.jpg')}}"></image>
                            <h3 class="news-title"><a href="#">First Name, Last Name</a></h3>
                            <h3 class="news-title"><a href="#">Position</a></h3>
                            <small class="date"><i class="fa fa-calendar"></i>Contact details</small>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.sidebar')
        </div>
    </div>
@endsection