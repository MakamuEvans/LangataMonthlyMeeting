@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="images/page-head-1.jpg">
        <div class="container">
            <h2 class="page-title">Leaders</h2>
        </div>
    </div>

    <main class="main-content">
        <div class="fullwidth-block">
            <div class="container">
                <div class="row">
                    <div class="content col-md-8">
                        <div class="content">
                            <h1>Our Organization</h1>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#">Nairobi Yearly Meeting Leaders</a></li>
                                <li><a href="#">Monthly Meeting Leaders</a></li>
                            </ul>
                        </div>
                    </div>
                    @include('includes.sidebar')
                </div>
            </div>
        </div>
    </main> <!-- .main-content -->
@endsection