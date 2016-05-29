<section>
    <!-- desktop -->
        <div class="orbit show-for-large columns" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
            <ul class="orbit-container">
                <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            @foreach( $banners as $banner)
                @if($banner->sequence == 1)
                    <li class="is-active orbit-slide">
                @else
                    <li class="orbit-slide">
                @endif
                        <a>
                            {!! Html::image($banner->image_url, 'alt', array("class"=>"orbit-image")) !!}
                            <figcaption class="orbit-caption">{!! $banner->caption !!}</figcaption>
                        </a>
                    </li>
            @endforeach
            </ul>
            <div class="orbit-bullets-container">
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
    <div class="orbit show-for-medium-only columns mg-b-1" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
        <ul class="orbit-container">
            @foreach( $banners as $banner)
                @if($banner->sequence == 1)
                    <li class="is-active orbit-slide">
                @else
                    <li class="orbit-slide">
                @endif
                        <a>
                            {!! Html::image($banner->image_url, 'alt', array("class"=>"orbit-image")) !!}
                            <figcaption class="orbit-caption">{!! $banner->caption !!}</figcaption>
                        </a>
                    </li>
            @endforeach
        </ul>
    </div>

    <!-- mobile -->
    <div class="orbit show-for-small-only columns mg-b-1" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
        <ul class="orbit-container">
            @foreach( $banners as $banner)
                @if($banner->sequence == 1)
                    <li class="is-active orbit-slide">
                @else
                    <li class="orbit-slide">
                @endif
                        <a>
                            {!! Html::image($banner->image_url, 'alt', array("class"=>"orbit-image")) !!}
                            <figcaption class="orbit-caption">{!! $banner->caption !!}</figcaption>
                        </a>
                    </li>
            @endforeach
        </ul>
    </div>
</section>