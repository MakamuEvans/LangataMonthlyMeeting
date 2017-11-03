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

                            <div id="exTab2" class="">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a  href="#1" data-toggle="tab">Nairobi Yearly Meeting</a>
                                    </li>
                                    <li><a href="#2" data-toggle="tab">Langata Monthly Meeting</a>
                                    </li>
                                </ul>

                                <div class="tab-content ">
                                    <div class="tab-pane active" id="1">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a  href="#mainoffice" data-toggle="tab">Main Office</a>
                                            </li>
                                            <li>
                                                <a href="#committee" data-toggle="tab">Committees</a>
                                            </li>
                                            <li>
                                                <a href="#quarterly" data-toggle="tab">Langata Quarterly Co-ordinating committee</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="2">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a  href="#mainofficem" data-toggle="tab">Main Office</a>
                                            </li>
                                            <li>
                                                <a href="#committeem" data-toggle="tab">Committees</a>
                                            </li>
                                            <li>
                                                <a href="#ll" data-toggle="tab">Langata Local</a>
                                            </li>
                                            <li>
                                                <a href="#nw" data-toggle="tab">Nairobi West</a>
                                            </li><li>
                                                <a href="#or" data-toggle="tab">Ongata Rongai</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    @include('includes.sidebar')
                </div>
            </div>
        </div>
    </main> <!-- .main-content -->
@endsection