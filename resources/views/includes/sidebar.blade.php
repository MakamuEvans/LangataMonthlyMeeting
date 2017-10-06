<div class="sidebar col-md-3 col-md-offset-1">
    <div class="widget">
        <h3 class="widget-title">SideBar</h3>
        <b>Theme of this Year</b>
        @if(isset($themeYear))
            <p>{{$themeYear->title}} : {{$themeYear->verse}}</p>
        @endif
        <b>Theme of this Month</b>
        @if(isset($themeMonth))
            <p>{{$themeMonth->title}} : {{$themeMonth->verse}}</p>
        @endif
    </div>

    <div class="widget">
        <h3 class="widget-title">Social</h3>

    </div>

    <div class="widget">
        <h3 class="widget-title">Gallery updates</h3>

        <div class="galery-thumb">
            <a href="#"><img src="{{url('images/gallery-thumb-1.jpg')}}" alt=""></a>
            <a href="#"><img src="{{url('images/gallery-thumb-2.jpg')}}" alt=""></a>
            <a href="#"><img src="{{url('images/gallery-thumb-3.jpg')}}" alt=""></a>
            <a href="#"><img src="{{url('images/gallery-thumb-4.jpg')}}" alt=""></a>
            <a href="#"><img src="{{url('images/gallery-thumb-5.jpg')}}" alt=""></a>
            <a href="#"><img src="{{url('images/gallery-thumb-6.jpg')}}" alt=""></a>
        </div>
    </div>

    <div class="widget">
        <h3 class="widget-title"></h3>
        <p>Bible quote of the day</p>
    </div>
</div>