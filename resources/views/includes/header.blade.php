<header class="site-header">
    <div class="container">
        <a href="#" class="branding">
            <img src="{{url('images/langata.jpg')}}" style="width: 250px;height: auto" alt="" class="logo">
            <div class="row" style="margin: 0px;padding: 0px">
                <i class="form-control">Lang'ata monthly meeting of friends church, P.O. BOX 51654, 00200-Nairobi</i>
            </div>
        </a>

        <div class="main-navigation">
            <button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
            <ul class="menu theme-l">
                @if(isset($home))
                    <li class="menu-item current-menu-item theme-l"><a href="{{url('/')}}">Home</a></li>
                @else
                    <li class="menu-item theme-l"><a href="{{url('/')}}">Home</a></li>
                @endif
                @if(isset($about_us))
                    <li class="menu-item current-menu-item"><a href="{{url('about-us')}}">About Us</a></li>
                @else
                    <li class="menu-item"><a href="{{url('about-us')}}">About Us</a></li>
                @endif
                @if(isset($ministries))
                    <li class="menu-item current-menu-item"><a href="{{url('ministries')}}">Ministries</a></li>
                @else
                    <li class="menu-item"><a href="{{url('ministries')}}">Ministries</a></li>
                @endif
                @if(isset($leaders))
                    <li class="menu-item current-menu-item"><a href="{{url('leaders')}}">Leaders</a></li>
                @else
                    <li class="menu-item"><a href="{{url('leaders')}}">Leaders</a></li>
                @endif
                @if(isset($sermons))
                    <li class="menu-item current-menu-item"><a href="{{url('sermons')}}">Sermons</a></li>
                @else
                    <li class="menu-item"><a href="{{url('sermons')}}">Sermons</a></li>
                @endif
                @if(isset($events))
                    <li class="menu-item current-menu-item"><a href="{{url('events')}}">News</a></li>
                @else
                    <li class="menu-item"><a href="{{url('events')}}">News</a></li>
                @endif
                @if(isset($gallery))
                    <li class="menu-item current-menu-item"><a href="{{url('gallery')}}">Gallery</a></li>
                @else
                    <li class="menu-item"><a href="{{url('galery')}}">Gallery</a></li>
                @endif
                @if(isset($downloads))
                    <li class="menu-item current-menu-item"><a href="{{url('downloads')}}">Downloads</a></li>
                @else
                    <li class="menu-item"><a href="{{url('downloads')}}">Downloads</a></li>
                @endif
            </ul>
        </div>

        <div class="mobile-navigation"></div>
    </div>
</header> <!-- .site-header -->