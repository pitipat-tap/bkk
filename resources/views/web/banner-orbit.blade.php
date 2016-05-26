<section>
    <!-- desktop -->
    <div class="orbit show-for-large columns" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
        <ul class="orbit-container">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            <li class="is-active orbit-slide">
                <a>
                    {!! HTML::image("http://placehold.it/1500x500","",array("class"=>"orbit-image")) !!}
                    <figcaption class="orbit-caption">1</figcaption>
                </a>
            </li>
            <li class="orbit-slide">
                <a>
                    {!! HTML::image("http://placehold.it/1500x500","",array("class"=>"orbit-image")) !!}
                    <figcaption class="orbit-caption">2</figcaption>
                </a>
            </li>
            <li class="orbit-slide">
                <a>
                    {!! HTML::image("http://placehold.it/1500x500","",array("class"=>"orbit-image")) !!}
                    <figcaption class="orbit-caption">3</figcaption>
                </a>
            </li>
        </ul>
        <div class="orbit-bullets-container">
            <nav class="orbit-bullets" style="$orbit-bullet-margin-bottom: 0em">
                <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
            </nav>
        </div>
    </div>

    <!-- tablet -->
    <div class="orbit show-for-medium-only columns mg-b-1" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
        <ul class="orbit-container">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            <li class="is-active orbit-slide">
                <a>
                    {!! HTML::image("http://placehold.it/400x300","",array("class"=>"orbit-image")) !!}
                    <figcaption class="orbit-caption">1</figcaption>
                </a>
            </li>
            <li class="orbit-slide">
                <a>
                    {!! HTML::image("http://placehold.it/400x300","",array("class"=>"orbit-image")) !!}
                    <figcaption class="orbit-caption">2</figcaption>
                </a>
            </li>
            <li class="orbit-slide">
                <a>
                    {!! HTML::image("http://placehold.it/400x300","",array("class"=>"orbit-image")) !!}
                    <figcaption class="orbit-caption">3</figcaption>
                </a>
            </li>
        </ul>
    </div>

    <!-- mobile -->
    <div class="orbit show-for-small-only columns mg-b-1" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
        <ul class="orbit-container">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            <li class="is-active orbit-slide">
                <a>
                    {!! HTML::image("http://placehold.it/300x400","",array("class"=>"orbit-image")) !!}
                    <figcaption class="orbit-caption">1</figcaption>
                </a>
            </li>
            <li class="orbit-slide">
                <a>
                    {!! HTML::image("http://placehold.it/300x400","",array("class"=>"orbit-image")) !!}
                    <figcaption class="orbit-caption">2</figcaption>
                </a>
            </li>
            <li class="orbit-slide">
                <a>
                    {!! HTML::image("http://placehold.it/300x400","",array("class"=>"orbit-image")) !!}
                    <figcaption class="orbit-caption">3</figcaption>
                </a>
            </li>
        </ul>
    </div>
</section>