@extends("..layouts.head")


@section("specific_css")
@stop


@section("specific_js_head")
{!! Html::script("js/gallery.js") !!}
@stop


@section("body")

@include("web.top-menu")
<div class="body-section">
	<div class="banner-page-title centered columns mg-b-1">Gallery</div>

	<!-- Desktop -->
	<div class="columns">
        <div class="selected-img">
            <div class="selected-frame" align="center">
                <img id="selected" src="">
            </div>
        </div>
        <div class="gallery-wrapper">
            <div class="gallery-img">
                {!! HTML::image("images/gallery/01.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/02.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/03.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/04.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/05.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/06.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/07.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/08.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/09.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/10.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/11.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/12.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/13.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/14.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/15.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/16.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/01.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/02.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/03.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/04.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/05.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/06.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/07.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/08.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/09.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/10.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/11.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/12.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/13.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/14.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/15.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/16.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
        </div>
	</div>
</div>
@include("web.footer")
@stop
