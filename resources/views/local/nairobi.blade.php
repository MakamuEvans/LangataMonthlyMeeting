@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="{{url('images/page-head-1.jpg')}}">
        <div class="container">
            <h2 class="page-title">Local Meetings/Nairobi West</h2>
        </div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="col-md-8">
                <div class="row">
                    @foreach($leaders as $leader)
                        <div class="col-md-3 col-sm-6">
                            <div class="news">
                                <image class="news-image" src="{{url('images/avatar.png')}}"></image>
                                <b class="news-title"><a href="#">First Name, Last Name</a></b>
                                <hr>
                                <i class="news-title"><a href="#">{{$leader->position}}</a></i><br>
                                <small class="date"><i class="fa fa-calendar"></i>Contact details</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @include('includes.sidebar')
        </div>
    </div>
@endsection