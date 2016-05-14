@extends("..layouts.head")


@section("specific_css")
{!! Html::style("css/transportation.css") !!}
@stop


@section("specific_js_head")
{!! Html::script("js/verge.min.js") !!}
@stop


@section("body")

@include("web.top-menu")
<div class="banner-container">
	{!! HTML::image("http://placehold.it/1500x500","bkk-logo",array("class"=>"banner-picture")) !!}
</div>
<div class="banner-page-title mg-b-1">Transportaion</div>
<div class="body-section">
	<div class="transportation-container">
		{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"mg-b-1")) !!}

		<div>
			<div class="transportation-label small-3 medium-1 columns">
				{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="transportation-content small-9 medium-11 columns pd-r-0">
				<div class="row">
					test
				</div>
				<hr>
				<div class="row">
					<div class="small-8 medium-10 columns">
						test2
					</div>
					<div class="small-4 medium-2 columns">
						<button class="button mg-b-0">test</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="mg-b-5">
	<div class="transportation-container">
		{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"mg-b-1")) !!}

		<div>
			<div class="transportation-label small-3 medium-1 columns">
				{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="transportation-content small-9 medium-11 columns pd-r-0">
				<div class="row">
					test
				</div>
				<hr>
				<div class="row">
					<div class="small-8 medium-10 columns">
						test2
					</div>
					<div class="small-4 medium-2 columns">
						<button class="button mg-b-0">test</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="mg-b-5">
	<div class="transportation-container">
		{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"mg-b-1")) !!}

		<div>
			<div class="transportation-label small-3 medium-1 columns">
				{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="transportation-content small-9 medium-11 columns pd-r-0">
				<div class="row">
					test
				</div>
				<hr>
				<div class="row">
					<div class="small-8 medium-10 columns">
						test2
					</div>
					<div class="small-4 medium-2 columns">
						<button class="button mg-b-0">test</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="mg-b-5">
</div>
@include("web.footer")
@stop
