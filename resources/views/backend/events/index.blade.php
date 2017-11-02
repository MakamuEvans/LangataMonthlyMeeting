@extends('layouts.backend')
@section('content')
<div class="page-content">
    <div class="row">
        @include('includes.b_side')
        <div class="col-md-10">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Events/Announcements</div>
                    <div class="panel-options">
                        <a href="{{url('admin/events/new')}}" data-rel="collapse">New</a>
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
                        @foreach($events as $event)
                        <tr>
                            <td></td>
                            <td>{{$event->title}}</td>
                            <td>{!! str_limit($event->description, 150) !!}</td>
                            <td>{{$event->dated}}</td>
                            <td>
                                <a href="{{url('/admin/events/edit/'.$event->id)}}" style="color: green">edit</a>
                                <a href="{{url('/admin/events/delete/'.$event->id)}}" style="color: red">delete</a>
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