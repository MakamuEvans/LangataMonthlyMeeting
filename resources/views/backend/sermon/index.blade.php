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
                            <a href="{{url('admin/themes/new')}}" data-rel="collapse">New</a>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="row alert alert-success" style="margin-top: 20px">
                            {{ session('status') }}
                        </div>
                    @endif
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
                                    <td>
                                        <a href="{{url('/admin/themes/edit/'.$sermon->id)}}" style="color: green">edit</a>
                                        <a href="{{url('/admin/themes/delete/'.$sermon->id)}}" style="color: red">delete</a>
                                    </td>
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