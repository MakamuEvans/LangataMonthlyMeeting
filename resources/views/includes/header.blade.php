{{--
<header class="site-header">
    <div class="container">
        <div class="main-navigation">

            <button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
            <ul class="menu theme-l">
                <li class="menu-item pull-left theme-l" style="padding-top: 20px">

                </li>

            </ul>
        </div>

        <div class="mobile-navigation"></div>
    </div>
</header> <!-- .site-header -->--}}



<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #1F55AB">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="padding: 0px">
                <img src="{{url('images/langata.jpg')}}" style="width: 200px;height: auto" alt="" class="logo">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                @if(isset($home))
                    <li class="menu-item active theme-l" style="padding: 0px;margin: 0px;color: white"><a href="{{url('/')}}">Home</a></li>
                @else
                    <li class="menu-item theme-l"><a href="{{url('/')}}">Home</a></li>
                @endif
                @if(isset($about_us))
                    <li class="menu-item active"><a href="{{url('about-us')}}" style="color: white">About Us</a></li>
                @else
                    <li class="menu-item"><a href="{{url('about-us')}}">About Us</a></li>
                @endif
                @if(isset($leaders))
                    <li class="menu-item active"><a href="{{url('leaders')}}">Leaders</a></li>
                @else
                    <li class="menu-item"><a href="{{url('leaders')}}">Leaders</a></li>
                @endif
                @if(isset($sermons))
                    <li class="menu-item active"><a href="{{url('sermons')}}">Sermons</a></li>
                @else
                    <li class="menu-item"><a href="{{url('sermons')}}">Sermons</a></li>
                @endif
                @if(isset($events))
                    <li class="menu-item active"><a href="{{url('events')}}">News</a></li>
                @else
                    <li class="menu-item"><a href="{{url('events')}}">News</a></li>
                @endif
                @if(isset($gallery))
                    <li class="menu-item active"><a href="{{url('gallery')}}">Gallery</a></li>
                @else
                    <li class="menu-item"><a href="{{url('gallery')}}">Gallery</a></li>
                @endif
                @if(isset($downloads))
                    <li class="menu-item active"><a href="{{url('downloads')}}">Downloads</a></li>
                @else
                    <li class="menu-item"><a href="{{url('downloads')}}">Downloads</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
