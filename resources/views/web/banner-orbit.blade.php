<section>
    <!-- desktop -->
        <div class="orbit" role="region" aria-label="" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
            <ul class="orbit-container">
                <button class="orbit-previous show-for-large"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                <button class="orbit-next show-for-large"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            @foreach( $banners as $banner)
                @if($banner->sequence == 1)
                    <li class="is-active orbit-slide">
                @else
                    <li class="orbit-slide">
                @endif
                        <a href="{!! $banner->link_url !!}">
                            <img class="orbit-image" data-interchange="[{!! $banner->mobile_image_url !!}, small], [{!! $banner->tablet_image_url !!}, medium], [{!! $banner->desktop_image_url !!}, large]">
                            <figcaption class="orbit-caption">{!! $banner->caption !!}</figcaption>
                        </a>
                    </li>
            @endforeach
                    <li class="orbit-slide">
                        <a href="http://bangkoktourist.com/uploads/normal/AW-EN_lower%20Mekong.pdf">
                            <img class="orbit-image" data-interchange="[uploads/normal/orbit/AW-EN_lower-Mekong-mobile.jpg, small], [uploads/normal/orbit/AW-EN_lower-Mekong-tablet.jpg, medium], [uploads/normal/orbit/AW-EN_lower-Mekong.jpg, large]">
                            <figcaption class="orbit-caption">Mahkong</figcaption>
                        </a>
                    </li>
                    <li class="orbit-slide">
                        <a href="http://bangkoktourist.com/uploads/normal/AW-TH_lower%20Mekong.pdf">
                            <img class="orbit-image" data-interchange="[uploads/normal/orbit/AW-TH_lower-Mekong-mobile.jpg, small], [uploads/normal/orbit/AW-TH_lower-Mekong-tablet.jpg, medium], [uploads/normal/orbit/AW-TH_lower_Mekong.jpg, large]">
                            <figcaption class="orbit-caption">แม่โขง</figcaption>
                        </a>
                    </li>
            </ul>
            <div class="orbit-bullets-container show-for-large">
                <nav class="orbit-bullets" style="$orbit-bullet-margin-bottom: 0em">
                @foreach( $banners as $banner)
                    @if($banner->sequence == 1)
                        <button class="is-active" data-slide="{!! ($banner->sequence-1) !!}"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                    @else
                        <button data-slide="{!! ($banner->sequence-1) !!}"><span class="show-for-sr">Second slide details.</span></button>
                    @endif
                @endforeach
                </nav>
            </div>
        </div>

    <!-- tablet -->
    <!-- <div class="orbit show-for-medium-only columns mg-b-1" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
        <ul class="orbit-container">
            @foreach( $banners as $banner)
                @if($banner->sequence == 1)
                    <li class="is-active orbit-slide">
                @else
                    <li class="orbit-slide">
                @endif
                        <a>
                            {!! Html::image($banner->tablet_image_url, 'alt', array("class"=>"orbit-image")) !!}
                            <figcaption class="orbit-caption">{!! $banner->caption !!}</figcaption>
                        </a>
                    </li>
            @endforeach
        </ul>
    </div> -->

    <!-- mobile -->
    <!-- <div class="orbit show-for-small-only columns mg-b-1" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
        <ul class="orbit-container">
            @foreach( $banners as $banner)
                @if($banner->sequence == 1)
                    <li class="is-active orbit-slide">
                @else
                    <li class="orbit-slide">
                @endif
                        <a>
                            {!! Html::image($banner->mobile_image_url, 'alt', array("class"=>"orbit-image")) !!}
                            <figcaption class="orbit-caption">{!! $banner->caption !!}</figcaption>
                        </a>
                    </li>
            @endforeach
        </ul>
    </div> -->
</section>
