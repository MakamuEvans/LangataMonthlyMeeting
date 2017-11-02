@extends('layouts.backend')
@section('content')
    <div class="page-content">
        <div class="row">
            @include('includes.b_side')
            <div class="col-md-10">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">Gallery</div>
                        <div class="panel-options">
                            <a href="{{url('admin/gallery/new')}}" data-rel="collapse">New</a>
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
                                <th>Description</th>
                                <th>Dated</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($gallery as $download)
                                <tr>
                                    <td></td>
                                    <td>{{$download->title}}</td>
                                    <td>{{$download->description}}</td>
                                    <td>{{$download->created_at}}</td>
                                    <td><a href="{{url('/admin/gallery/delete/'.$download->id)}}" style="color: red">delete</a> </td>
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