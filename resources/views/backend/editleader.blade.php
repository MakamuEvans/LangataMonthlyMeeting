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
                        <b>Category Name:  </b>{{$leader->name}}<br><br>
                        <b>Position Name:  </b>{{$leader->position}}<br><br>
                        <b>Location:  </b>{{isset($leader->location)? $leader->location : 'Not Applicable'}}<br><br>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>First Name:</b>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <b>Last Name:  </b>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <b>Contact(s):  </b>
                                    <textarea class="form-control">

                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection