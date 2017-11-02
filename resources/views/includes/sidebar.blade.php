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
        <div class="fb-page" data-href="https://www.facebook.com/fclangata" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/fclangata" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/fclangata">Friendschurch Langata</a></blockquote></div>
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