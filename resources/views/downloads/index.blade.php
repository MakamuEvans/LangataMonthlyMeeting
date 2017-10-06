@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="{{url('images/page-head-1.jpg')}}">
        <div class="container">
            <h2 class="page-title">Downloads</h2>
        </div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="col-md-8">
                @foreach($downloads as $download)
                    <div class="col-md-4" style="border: solid #1F55AB 1px;text-align: center">
                        <b>{{$download->title}}</b><br>
                        <i>{{$download->created_at}}</i><br>
                        <a href="{{url('downloads/link/'.$download->url)}}" class="btn btn-success btn-sm" style="background: #1F55AB">Download</a>
                    </div>
                @endforeach
            </div>
            @include('includes.sidebar')
        </div>
    </div>
@endsection