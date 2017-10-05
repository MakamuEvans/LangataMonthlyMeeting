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
                <div class="col-md-4" style="border: solid #1F55AB 1px;text-align: center">
                    <b>Title of item</b><br>
                    <i>Uploaded on:</i><br>
                    <a href="" class="btn btn-success btn-sm">Download</a>
                </div>
            </div>
            @include('includes.sidebar')
        </div>
    </div>
@endsection