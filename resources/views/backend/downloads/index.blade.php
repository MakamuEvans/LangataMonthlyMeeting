@extends('layouts.backend')
@section('content')
    <div class="page-content">
        <div class="row">
            @include('includes.b_side')
            <div class="col-md-10">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">Downloads</div>
                        <div class="panel-options">
                            <a href="{{url('admin/downloads/new')}}" data-rel="collapse">New</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Dated</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($downloads as $download)
                                <tr>
                                    <td></td>
                                    <td>{{$download->title}}</td>
                                    <td>{{$download->created_at}}</td>
                                    <td><a href="{{url('/admin/downloads/edit/'.$download->id)}}">edit</a> </td>
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