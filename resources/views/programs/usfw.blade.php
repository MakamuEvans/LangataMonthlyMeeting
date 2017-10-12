@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="{{url('images/page-head-1.jpg')}}">
        <div class="container">
            <h2 class="page-title">Leaders/USFW</h2>
        </div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="col-md-8">
                <div class="row">
                    <p>
                        <b>“USFW”</b> is the title given to designate the women’s fellowship in Friends Church. History has proved that this is the strongest arm of our church so far. In the monthly meeting, the USFW is under the leadership of Mama Florence Iminza, who is a member of Langata Local Church.
                        The women in leadership are doing a commendable job, and their roles are very much appreciated by the congregation at large. Most of the cell group leaders come from this arm of the church, which also goes to prove that women are actually a very important group in the society.
                        In Ongata Rongai Church for example, the USFW has played an active role in the implementation of the cell group policies which outline the roles of the three cell groups in the Rongai Church: Mayor Road, Quarry and Rimplaise Cell groups. The same goes for the other member churches, which are Nairobi West and Lang’ata Local Churches.
                        Most of all, the USFW seeks to be on the forefront in organizing the women in the church into small groups for the purposes of welfare in their spiritual, social, psychological and family well being.
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