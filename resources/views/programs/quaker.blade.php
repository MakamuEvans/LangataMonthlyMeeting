@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="{{url('images/page-head-1.jpg')}}">
        <div class="container">
            <h2 class="page-title">Leaders/Quakermen</h2>
        </div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="col-md-8">
                <div class="row">
                    <p>
                        <b>“Quakermen”</b> is the title given to designate the men in the church. As far as the three local churches are involved, there have not been any major challenges.
                        There have been some major hallmarks for the group, the most notable one being the official launch of the Quakermen programme in Langata Monthly Meeting which took place last year, 2013, under the able leadership of Josphat Obondo. Since then, the Quakermen have become a tightly knit group. They have been meeting regularly, discussing church issues, and playing roles especially in the development of the church through contributions.
                        They also portray active participation in the Langata Monthly Meeting Church affairs by attending Fellowships, business meetings, conferences, and even coming together to sing songs infront of the congregation during the Quakermen Sundays.
                        The sky is definitely not the limit for this arm. They thank God for all that He has helped them achieve so far, and only pray that He will see them even further.
                        <br><br>
                    </p>
                </div>
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