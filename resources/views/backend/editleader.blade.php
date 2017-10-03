@extends('layouts.backend')
@section('content')
    <div class="page-content">
        <div class="row">
            @include('includes.b_side')
            <div class="col-md-10">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <h2>Edit Leader</h2>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(array('url'=>'leaders/add','files'=>true,'class'=>'form-horizontal', 'method'=>'POST')) !!}
                        <input type="hidden" name="pos_id" value="{{$leader->id}}">
                        <b>Category Name:  </b>{{$leader->name}}<br><br>
                        <b>Position Name:  </b>{{$leader->position}}<br><br>
                        <b>Location:  </b>{{isset($leader->location)? $leader->location : 'Not Applicable'}}<br><br>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>First Name:</b>
                                    <input type="text" name="first_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <b>Last Name:  </b>
                                    <input type="text" name="last_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <b>Contact(s):  </b>
                                    <textarea class="form-control" name="contact">

                                    </textarea>
                                </div>
                                <div class="row" style="padding-left: 20px">
                                    <b>Select Leader's Image</b>
                                    {!! Form::file('image', null) !!}
                                </div>
                            </div>
                        </div>
                        <div  style="margin-top: 2%">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-plus"></i> Save
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection