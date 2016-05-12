@extends("..layouts.head")


@section("specific_css")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" />
{!! Html::style("css/home.css") !!}
@stop


@section("specific_js_head")
{!! Html::script("js/verge.min.js") !!}
@stop


@section("body")

@include("web.top-menu")
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <ul class="orbit-container">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
        <li class="is-active orbit-slide">
            <a>
                <img class="orbit-image" src="images/orbit/1.jpg" alt="Space">
                <figcaption class="orbit-caption">1</figcaption>
            </a>
        </li>
        <li class="orbit-slide">
            <a>
                <img class="orbit-image" src="images/orbit/2.jpg" alt="Space">
                <figcaption class="orbit-caption">2</figcaption>
            </a>
        </li>
        <li class="orbit-slide">
            <a>
                <img class="orbit-image" src="images/orbit/3.jpg" alt="Space">
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
<div class="banner-page-title">Destination</div>
<div class="body-section">
    <h1>Body</h1>
</div>

@include("web.footer")
@stop



