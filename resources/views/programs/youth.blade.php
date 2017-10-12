@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="{{url('images/page-head-1.jpg')}}">
        <div class="container">
            <h2 class="page-title">Leaders/Youth</h2>
        </div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="col-md-8">
                <div class="row">
                    @foreach($leaders as $leader)
                        <div class="col-md-3 col-sm-6">
                            <div class="news">
                                @if(isset($leader->leader->image))
                                    @if(!is_null($leader->leader->image))
                                        <image class="news-image"
                                               src="{{url('public/leaders/'.$leader->leader->image)}}"></image>
                                    @else
                                        <image class="news-image" src="{{url('images/avatar.png')}}"></image>
                                    @endif
                                @else
                                    <image class="news-image" src="{{url('images/avatar.png')}}"></image>
                                @endif

                                @if(isset($leader->leader->first_name))
                                    <b class="news-title"><a href="#">{{$leader->leader->first_name}}
                                            , {{$leader->leader->last_name}}</a></b>
                                @else
                                    Not Set
                                @endif
                                <hr>
                                <i class="news-title"><a href="#">{{$leader->position}}</a></i><br>
                                @if(isset($leader->leader->id))
                                    <small class="date"><i class="fa fa-calendar"></i>{{$leader->leader->contact}}
                                    </small>
                                @else
                                    Not Set
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @include('includes.sidebar')
        </div>
    </div>
@endsection