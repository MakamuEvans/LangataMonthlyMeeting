@extends('layouts.theme')
@section('content')
    <div class="page-head" data-bg-image="images/page-head-1.jpg">
        <div class="container">
            <h2 class="page-title">About Us</h2>
        </div>
    </div>

    <main class="main-content">
        <div class="fullwidth-block">
            <div class="container">
                <div class="row">
                    <div class="content col-md-8">
                        <div class="row effect1 box">
                            <b class="theme-l" style="font-size: 25px">History of our church...</b>
                            <p>
                                Friends Church (Quakers) Langata Monthly Meeting started in 1987. <br>
                                It has three local meetings which are located as below; <br><br>

                                1. <b class="theme-l">Langata Local Church</b> -located near Otiende Shopping Centre, opposite Langata High School and is less than one kilometer from Langata Police Station.  The church started in 1987 as a local meeting by a handful of members of Quaker faith meeting at the KWS education center and later at the Langata Road Primary School.  As the congregation grew the members acquired a one acre plot where current construction is ongoing.  It has a seating capacity of 2,500 people.  To date through the members own efforts and other friends and well wishers we have managed to complete construction of the foundation, walling, ring beams, balcony, roofing, doors, plastering, tiling the floor and offices.<br><br>

                                2. <b class="theme-l">Nairobi West Local Church</b> -located next to Strathmore Business School in Nairobi West.  The church is in a developmental phase and is working on development of the plot to accommodate various church activities.<br><br>

                                3. <b class="theme-l">Ongata Rongai Local Church</b> -is located in Ongata Rongai near Tuskys Chap Chap across Magadi Road third right turning on land that was purchased in 2012.  The Church was inaugurated by the Nairobi Yearly Meeting as a local meeting of the Langata Monthly Meeting in 2011 and have been meeting in over four different rented locations before finally identifying a piece of land to purchase where they currently meet.  To date through the members own efforts and other friends and well-wishers the Church has managed to build a temporary meeting room, ablution facilities.<br><br>

                                Our desire is to grow in Christ and to preach to all in our community, family and friends about the love of Christ.


                            </p>
                        </div>

                        <div class="row effect1 box">
                            <b class="theme-l" style="font-size: 25px">Our Vision...</b>
                            <p>
                                To be a Christ Centered Church
                            </p>
                        </div>

                        <div class="row effect1 box">
                            <b class="theme-l" style="font-size: 25px">Our Mission...</b>
                            <p>
                                To prepare a people for Christ,
                                equipping them making them disciples
                                through all our programmes and activities
                                for his second coming”.
                            </p>
                        </div>

                        <div class="row effect1 box">
                            <b class="theme-l" style="font-size: 25px">Core Values - Quaker Beliefs</b>
                            <p>
                                The Quakers believe in the following:
                                Eternal Trinity – God the Father, Son and HolySpirit

                                Holy Scripture, both Old and New Testaments, inspired by God without error in
                                that it affirms and as the only infallible rule of faith and practice.
                                In the death and resurrection of our Lord Jesus Christ and the life after death for

                                those who accept Him as their Lord and Saviour.
                            </p>
                            <div class="row">
                                <div class="col-md-4">
                                    <b class="theme-l" style="font-size: 17px">Core Values - Quaker Beliefs</b>
                                    <p>
                                        That the Church is the body of Christ
                                        made up of those who truly confess
                                        Him as Lord and Saviour, born again
                                        and zealous in bringing people to
                                        Christ
                                        In the practice of total honesty at all
                                        times and not taking Oath (swearing by
                                        the Bible)
                                        In the Baptism of the Holy Spirit – who
                                        convicts and transforms those who
                                        truly confess of their sins and accept
                                        Christ as their Lord and Saviour.
                                        Quakers only affirm.
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <b class="theme-l" style="font-size: 17px">Core Values - Quaker Beliefs</b>
                                    <p>
                                        In the marriage of one wife and one
                                        husband and that any other union is
                                        contrary to scripture is not acceptable.
                                        That all people are made in the image
                                        of God. That of God in each man.
                                        Hence equal before His sight. No race,
                                        tribe, language or gender is regarded
                                        as superior over others.
                                        That Jesus Christ, the Word who was
                                        with God, is the only begotten Son of
                                        God. He was born of the Virgin Mary
                                        and is express image of the invisible
                                        God.
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <b class="theme-l" style="font-size: 17px">Core Values - Quaker Beliefs</b>
                                    <p>
                                        Humility - hence none expects
                                        special treatment because of
                                        position, wealth, education or any
                                        other thing that may make that
                                        other person different from others.
                                        Moderation or Simplicity –
                                        hence any possessions of any
                                        kind do not make some persons
                                        more important than those with
                                        less or more
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row effect1 box">
                            <b class="theme-l" style="font-size: 25px">Read More</b>
                            <p>
                                Click <a href="{{ url('public/Strategicplan.pdf') }}" style="background-color: #1F55AB">here</a> to view our strategic plan
                            </p>
                        </div>
                    </div>
                    @include('includes.sidebar')
                </div>
            </div>
        </div>
    </main> <!-- .main-content -->
@endsection