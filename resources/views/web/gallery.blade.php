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
                {!! HTML::image("http://placehold.it/1500x500","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/300x400","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x300","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/500x500","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/50x50","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/150x500","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/500x50","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/1600x900","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/450x800","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x300","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x300","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x300","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x300","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x300","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x800","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/800x400","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/1500x500","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x200","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/200x300","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x400","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x400","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x400","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x400","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x400","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/500x1500","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/500x1500","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/500x1500","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/500x1500","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/500x1500","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x300","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x300","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("http://placehold.it/400x300g","bkk-gallery",array("class"=>"")) !!}
            </div>
        </div>
	</div>
</div>
@include("web.footer")
@stop
