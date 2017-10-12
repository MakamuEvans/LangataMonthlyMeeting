<div class="sidebar col-md-3 col-md-offset-1">
    <div class="widget">
        <h3 class="widget-title">SideBar</h3>
        <hr>
        <b style="color: black">Theme of this Year</b><br>
        @if(isset($themeYear))
            <p style="color: white">{{$themeYear->title}} : {{$themeYear->verse}}</p><br>
        @endif
        <b style="color: black">Theme of this Month</b><br>
        @if(isset($themeMonth))
            <p style="color: white">{{$themeMonth->title}} : {{$themeMonth->verse}}</p><br>
        @endif
    </div>

    <div class="widget">
        <h3 class="widget-title">Social</h3>
        <hr>

    </div>

    <div class="widget">
        <p style="color: #1F55AB">Bible quote of the day</p>
        <i style="color: white;font-size: 13px">
            @if(isset($quote))
                {{$quote->description}}
            @endif
        </i>
    </div>
</div>