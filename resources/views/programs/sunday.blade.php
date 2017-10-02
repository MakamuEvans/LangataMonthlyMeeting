@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="{{url('images/page-head-1.jpg')}}">
        <div class="container">
            <h2 class="page-title">Leaders/Sunday Service</h2>
        </div>
    </div>

    <div class="fullwidth-block">
        <div class="container">
            <div class="col-md-8">
                <div class="row">
                    <p>
                        This is the children’s ministry in the church. Most of its members are children from the age of 4years to around 17 years.
                        Since its inception, it has seen a steady rise in the number of children who look forward to being part of it every Sunday. The children have also been a blessing to the church, occasionally coming before the church congregation and presenting songs, Bible verses and short plays.
                        Under the able leadership of Mama Catherine Mukidi, the Sunday School has been able to nurture the children in the church into people who recognize the superiority of God and the importance of salvation through Bible stories and various outdoor activities organized by the church.
                        Most of the children have also become responsible and now display a sense of respect and obedience to their elders. And we thank God for them.
                        Jesus said, Let my children come to me, and the Lang’ata Friends Church Sunday school fraternity urges parents to bring their children to church on Sundays. We as a church are praying for this Ministry and believe that God will raise these young soldiers of the Kingdom into a formidable force that preaches His word without fear.

                        <br><br>
                    </p>
                </div>
                <div class="row">
                    @foreach($leaders as $leader)
                        <div class="col-md-3 col-sm-6">
                            <div class="news">
                                <image class="news-image" src="{{url('images/avatar.png')}}"></image>
                                <b class="news-title"><a href="#">First Name, Last Name</a></b>
                                <hr>
                                <i class="news-title"><a href="#">{{$leader->position}}</a></i><br>
                                <small class="date"><i class="fa fa-calendar"></i>Contact details</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @include('includes.sidebar')
        </div>
    </div>
@endsection