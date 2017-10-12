<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <h3 class=""><u>Our address</u></h3>
                    <p>
                        Lang'ata Monthly Meeting of Friends Church(Quakers),
                    </p>
                    <ul class="address">
                        <li><i class="fa fa-map-marker"></i>P.O. BOX 51654, 00200-Nairobi</li>
                        <li><i class="fa fa-phone"></i> phone number goes here</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:langatafriends@gmail.com">langatafriends@gmail.com</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 class="" style="color: white"><u>Previous Sermons</u></h3>
                    <ul class="bullet">
                        @foreach($sermonFooter as $sf)
                            <li>{{$sf->title}}:{{$sf->verse}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 class=""><u>External Links</u></h3>
                    <div class="row" style="margin: 10px">
                        <a href="http://friendsunitedmeeting.org/">Friends United Meeting</a><br><br>
                        <a href="http://fwcc.world/">Friends World Committee for Consultation</a>
                    </div>
                </div>
            </div>
        </div> <!-- .row -->
        <hr>
        <p class="colophon" style="text-align: center;color: black">
            Copyright 2017 Friends Church Langata, Monthly meeting. All right reserved
        <h6 class="pull-right" style="text-align: center;color: black">Designed by <a
                    href="http://www.makamuevans.co.ke">Makamu Evans</a></h6>
        </p>
    </div><!-- .container -->
</footer> <!-- .site-footer -->