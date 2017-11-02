@extends('layouts.backend')
@section('content')
    <div class="page-content">
        <div class="row">
            @include('includes.b_side')
            <div class="col-md-10">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <h2>Add Theme/Sermon/Quote</h2>
                    </div>
                    @if(isset($sermon))
                        <div class="panel-body">
                            {!! Form::open(array('url'=>'admin/themes/edit/'.$sermon->id,'files'=>true,'class'=>'form-horizontal', 'method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row" style="margin: 10px">
                                        <data>
                                            @if($sermon->type == 'Service')
                                                <div class="row">
                                                    <div class="form-group">
                                                        <b>Title:</b>
                                                        <input type="text" value="{{$sermon->title}}" required name="title" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Verse: </b>
                                                        <input type="text" value="{{$sermon->verse}}" required name="verse" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Description: </b>
                                                        <textarea class="form-control" required name="description">
                                                            {{$sermon->description}}
                                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Period: </b>
                                                        <input type="text" name="period" value="{{$sermon->period}}" id="serviceDate" required
                                                               class="form-control">
                                                    </div>
                                                </div>
                                            @elseif($sermon->type == 'Quote')
                                                <div class="row">
                                                    <div class="form-group">
                                                        <b>Quote of the day: </b>
                                                        <textarea class="form-control" required name="description">
                                                            {{$sermon->description}}
                                                        </textarea>
                                                    </div>
                                                </div>
                                            @elseif($sermon->type == 'Monthly Theme')
                                                <div class="row">
                                                    <div class="form-group">
                                                        <b>Title:</b>
                                                        <input type="text" value="{{$sermon->title}}" required name="title" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Verse: </b>
                                                        <input type="text" value="{{$sermon->verse}}" required name="verse" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Description: </b>
                                                        <textarea class="form-control"  required name="description">
                                                            {{$sermon->description}}
                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Period: </b>
                                                        <input type="text" name="period" value="{{$sermon->period}}" required id="monthDate"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                            @elseif($sermon->type == 'Yearly Theme')
                                                <div class="row">
                                                    <div class="form-group">
                                                        <b>Title:</b>
                                                        <input type="text" value="{{$sermon->title}}" required name="title" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Verse: </b>
                                                        <input type="text" value="{{$sermon->verse}}" required name="verse" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Description: </b>
                                                        <textarea class="form-control"  required name="description">
                                                            {{$sermon->description}}
                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <b>Period: </b>
                                                        <input type="text" name="period" value="{{$sermon->period}}" required id="yearDate"
                                                               class="form-control">
                                                    </div>
                                                </div>
                                            @endif
                                        </data>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 2%">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-plus"></i> Save
                                </button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    @else
                        <div class="panel-body">
                            {!! Form::open(array('url'=>'admin/themes/add','files'=>true,'class'=>'form-horizontal', 'method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <b>Type: </b>
                                        <select class="form-control" id="type" name="type" onchange="showRelevant()">
                                            <option selected disabled>-Select type-</option>
                                            <option value="Service">Service</option>
                                            <option value="Quote">Quote of the day</option>
                                            <option value="Monthly Theme">Monthly Theme</option>
                                            <option value="Yearly Theme">Yearly Theme</option>
                                        </select>
                                    </div>
                                    <div class="row" style="margin: 10px">
                                        <data>
                                            <div class="row service">
                                                <div class="form-group">
                                                    <b>Title:</b>
                                                    <input type="text" required name="title" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <b>Verse: </b>
                                                    <input type="text" required name="verse" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <b>Description: </b>
                                                    <textarea class="form-control" required name="description">
                                        </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <b>Period: </b>
                                                    <input type="text" name="period" id="serviceDate" required
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="row quote">
                                                <div class="form-group">
                                                    <b>Quote of the day: </b>
                                                    <textarea class="form-control" required name="description">
                                        </textarea>
                                                </div>
                                            </div>
                                            <div class="row monthly">
                                                <div class="form-group">
                                                    <b>Title:</b>
                                                    <input type="text" name="title" required class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <b>Verse: </b>
                                                    <input type="text" name="verse" required class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <b>Description: </b>
                                                    <textarea class="form-control" required name="description">
                                        </textarea></div>
                                                <div class="form-group">
                                                    <b>Period: </b>
                                                    <input type="text" name="period" required id="monthDate"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="row yearly">
                                                <div class="form-group">
                                                    <b>Title:</b>
                                                    <input type="text" name="title" required class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <b>Verse: </b>
                                                    <input type="text" name="verse" required class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <b>Description: </b>
                                                    <textarea class="form-control" required name="description">
                                        </textarea></div>
                                                <div class="form-group">
                                                    <b>Period: </b>
                                                    <input type="text" name="period" required id="yearDate"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </data>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 2%">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-plus"></i> Save
                                </button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection