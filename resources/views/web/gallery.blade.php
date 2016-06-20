@extends("..layouts.head")

@section("specific_title")
 : Gallery
@stop

@section("specific_css")
@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")
<div class="body-section">
	<div class="banner-page-title centered columns mg-b-1">Gallery</div>

        <h1 class="show-for-print" align="center"> for web only </h1>

	<!-- Desktop -->
	<div class="columns hide-for-print">
        <div class="selected-img">
            <div class="selected-frame" align="center">
                <img id="selected" src="">
            </div>
        </div>
        <div class="gallery-wrapper">
            @foreach ($images as $image)
                <div class="gallery-img">
                    {!! HTML::image($image->image_url,"bkk-gallery",array("class"=>"")) !!}
                </div>
            @endforeach
        </div>
        <div class="pagination">{!! $images->links() !!}</div>
	</div>
</div>
@include("web.footer")
@stop
