@extends("..layouts.head")


@section("specific_css")

@stop


@section("specific_js_head")
{!! Html::script("js/verge.min.js") !!}
@stop


@section("body")

@include("web.top-menu")

<div class="banner-page-title">About Us</div>
<h3 class="align-center mg-t-1"> กองการท่องเที่ยวกรุงเทพมหานคร </h3>
<div class="align-center">
	<a>
		{!! HTML::image("images/logo/bkk-logo.png","bkk-logo",array("class"=>"")) !!}
	</a>
</div>

@include("web.footer")
@stop
