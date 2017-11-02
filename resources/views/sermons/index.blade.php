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
                        <div class="row"
                             style="border: 1px white solid;margin-top: 10px;padding: 20px;border-radius: 5px">
                            <b class="theme-l" style="font-size: 25px"><u>{{$sermon->title}}</u></b>
                            <div class="col-md-12">
                                <div class="sermon-detail" style="color: white;">
                                    <div class="pastor"><b>Verse:</b> {{$sermon->verse}}</div>
                                    <b>Description:</b>
                                    <i class="sermon-title" style="color: white">
                                        {{$sermon->description}}
                                    </i>
                                    <div class="seremon-meta">
                                        <div style="color: white">
                                            <b>{{$sermon->type}}</b>
                                        </div>
                                        <div style="color: white">
                                            <b>Dated:</b> {{$sermon->period}}
                                        </div>
                                    </div>
                                </div>

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