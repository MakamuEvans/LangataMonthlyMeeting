@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="{{url('images/page-head-1.jpg')}}">
        <div class="container">
            <h2 class="page-title">Gallery</h2>
        </div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="col-md-8">
                @foreach($gallery as $item)
                    <div class="col-md-12 effect1 box" style="text-align: center;margin-right: 10px">
                        <?php $pics = explode(',', $item->images); $pic = $pics[0]; ?>
                        <div class="col-md-4">
                            <img src="{{url('/public/gallery/'.$pic)}}" style="width: 150px;height: auto">
                        </div>
                        <div class="col-md-8" style="padding-left: 10px;text-align: left">
                            <b>{{$item->title}}</b><br>
                            <i>{{$item->description}}</i><br>
                            <a href="{{url('gallery/view/'.$item->id)}}" class="btn btn-success">Open</a>
                        </div>
                    </div>
                @endforeach
            </div>
            @include('includes.sidebar')
        </div>
    </div>
@endsection