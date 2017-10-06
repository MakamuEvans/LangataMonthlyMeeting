<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <h3 class="">Our address</h3>
                    <p>
                        Lang'ata monthly meeting of friends church,
                    </p>
                    <ul class="address">
                        <li><i class="fa fa-map-marker"></i>P.O. BOX 51654, 00200-Nairobi</li>
                        <li><i class="fa fa-phone"></i> phone number goes here</li>
                        <li><i class="fa fa-envelope"></i> offocial church email goes here</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 class="" style="color: white">Previous Sermons</h3>
                    <ul class="bullet">
                        @foreach($sermonFooter as $sf)
                            <li><a href="#">{{$sf->title}}:{{$sf->verse}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3 class="">Contact form</h3>
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-md-6"><input type="text" placeholder="Your name..."></div>
                            <div class="col-md-6"><input type="text" placeholder="Email..."></div>
                        </div>

                        <textarea name="" placeholder="Your message..."></textarea>
                        <div class="text-right"><input type="submit" value="Send message"></div>

                    </form>
                </div>
            </div>
        </div> <!-- .row -->

        <p class="colophon">
            Copyright 2017 Friends Church Langata, Monthly meeting. All right reserved
        <h6 class="pull-right">Designed by <a href="http://www.makamuevans.co.ke">Makamu Evans</a></h6>
        </p>
    </div><!-- .container -->
</footer> <!-- .site-footer -->