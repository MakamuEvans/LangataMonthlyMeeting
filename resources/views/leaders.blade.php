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
                            <div class="row" style="text-align: center; border: dotted 2px #1F55AB;">
                                <div class="row" style="padding-top: 20px;background: #1F55AB; box-shadow: 0 8px 6px -6px black;margin: 20px;border: 1px #1F55AB solid">
                                    <a href="{{url('leaders/nairobi-yearly-meeting')}}" style="color: white"> Nairobi Yearly Meeting</a><br><br>
                                    <div class="row" style="padding-top: 20px;background: #2f77ab;box-shadow: 0 8px 6px -6px black;margin: 20px;border: 1px #1F55AB solid">
                                        <a href="{{url('leaders/monthly-meeting')}}"> Monthly Meeting</a><br><br>
                                        <div class="row">
                                            <div class="col-md-3" style="padding-top: 20px;background: #2f9cab;box-shadow: 0 8px 6px -6px black;margin: 20px;border: 1px #1F55AB solid">
                                                <b>Local Meeting</b><br><br>
                                                <a href="{{url('local-meeting/langata')}}"> Lang'ata</a><br><br>
                                                <a href="{{url('local-meeting/nairobi-west')}}"> Nairobi West</a><br><br>
                                                <a href="{{url('local-meeting/ongata-rongai')}}"> Ongata Rongai</a><br><br>
                                            </div>
                                            <div class="col-md-3" style="padding-top: 20px;background: #2f9cab;box-shadow: 0 8px 6px -6px black;margin: 20px;border: 1px #1F55AB solid">
                                                <b>Committee</b><br><br>
                                                <a href="{{url('committee/mission-commission')}}"> Mission Commission</a><br><br>
                                                <a href="{{url('committee/personal')}}"> Personal</a><br><br>
                                            </div>
                                            <div class="col-md-3" style="padding-top: 20px;background: #2f9cab;box-shadow: 0 8px 6px -6px black;margin: 20px;border: 1px #1F55AB solid">
                                                <b>Programs</b><br><br>
                                                    <a href="{{url('programs/quakers-men')}}"> Quakers-men</a><br><br>
                                                    <a href="{{url('programs/sunday-school')}}">Sunday School</a><br><br>
                                                    <a href="{{url('programs/usfw')}}">U.S.F.W</a><br><br>
                                                    <a href="{{url('programs/youth')}}">Youth</a><br><br>

                                            </div>
                                        </div>
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