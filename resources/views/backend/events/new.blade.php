@extends('layouts.backend')
@section('content')
    <div class="page-content">
        <div class="row">
            @include('includes.b_side')
            <div class="col-md-10">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <h2>Add Event/News</h2>
                    </div>
                    @if(isset($news))
                        <div class="panel-body">
                            {!! Form::open(array('url'=>'admin/events/edit/'.$news->id,'files'=>true,'class'=>'form-horizontal', 'method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <b>Title:</b>
                                        <input type="text" name="title" value="{{$news->title}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <b>Description: </b>
                                        <textarea class="form-control" id="tinymce_basic" name="description">
                                            {{$news->description}}
                                    </textarea>
                                    </div>
                                    <div class="form-group">
                                        <b>Dated: </b>
                                        <input type="text" name="dated" value="{{$news->dated}}" id="serviceDate" class="form-control">
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
                            {!! Form::open(array('url'=>'admin/events/add','files'=>true,'class'=>'form-horizontal', 'method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <b>Title:</b>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <b>Description: </b>
                                        <textarea class="form-control" id="tinymce_basic" name="description">
                                    </textarea>
                                    </div>
                                    <div class="form-group">
                                        <b>Dated: </b>
                                        <input type="text" name="dated" id="serviceDate" class="form-control">
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