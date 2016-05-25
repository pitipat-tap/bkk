@extends("..layouts.head")


@section("specific_css")
{!! Html::style("css/trip.css") !!}
@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")
<section>
	<div class="banner-container show-for-large columns">
		{!! HTML::image("http://placehold.it/1500x500","bkk-logo",array("class"=>"banner-picture")) !!}
	</div>
	<div class="banner-container hide-for-large columns mg-b-1">
		{!! HTML::image("http://placehold.it/300x400","bkk-logo",array("class"=>"banner-picture")) !!}
	</div>
</section>

<div class="body-section">
	<div class="banner-page-title">Recommend Trips</div>
	
</div>
@include("web.footer")
@stop
