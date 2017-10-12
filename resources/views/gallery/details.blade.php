@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="{{url('images/page-head-1.jpg')}}">
        <div class="container">
            <h2 class="page-title">Gallery/{{$gallery->title}}</h2>
        </div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="col-md-12" style="text-align: center;color: white">
                <p>
                    {{$gallery->description}}
                </p><br>
                <main class="main-content">
                    <div class="fullwidth-block" style="padding: 0px">
                        <div class="container">
                            <div class="col-md-12">
                                <div class="hero">
                                    <div class="slides">
                                        @foreach($images as $image)
                                            <li data-bg-image="{{url('public/gallery/'.$image)}}">
                                                <div class="container">
                                                    <div class="slide-content">
                                                        <small class="slide-subtitle">.</small>
                                                        <h1 class="slide-title">.</h1>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection