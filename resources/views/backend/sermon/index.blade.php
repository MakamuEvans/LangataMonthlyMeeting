@extends('layouts.backend')
@section('content')
    <div class="page-content">
        <div class="row">
            @include('includes.b_side')
            <div class="col-md-10">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">Sermons</div>
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-new-window"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Verse</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Period</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sermons as $sermon)
                                <tr>
                                    <td></td>
                                    <td>{{$sermon->title}}</td>
                                    <td>{{$sermon->verse}}</td>
                                    <td>{{$sermon->description}}</td>
                                    <td>{{$sermon->type}}</td>
                                    <td>{{$sermon->period}}</td>
                                    <td><a href="{{url('/admin/themes/edit/'.$sermon->id)}}">edit</a> </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection