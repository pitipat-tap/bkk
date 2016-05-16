@extends("..layouts.head")


@section("specific_css")
{!! Html::style("css/transportation.css") !!}
@stop


@section("specific_js_head")
{!! Html::script("js/verge.min.js") !!}
@stop


@section("body")

@include("web.top-menu")
<section>
	<div class="banner-container show-for-medium columns">
		{!! HTML::image("http://placehold.it/1500x500","bkk-logo",array("class"=>"banner-picture")) !!}
	</div>
	<div class="banner-container show-for-small-only columns mg-b-1">
		{!! HTML::image("http://placehold.it/300x400","bkk-logo",array("class"=>"banner-picture")) !!}
	</div>
</section>
<div class="body-section">
	<div class="banner-page-title show-for-medium medium-centered columns mg-b-1">Transportaion</div>

	<!-- Desktop -->
	<div class="show-for-medium columns">
		<div class="transportation-container">
			{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-label small-3 medium-1 columns">
					{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-9 medium-11 columns pd-r-0">
					<div class="row pd-t-05 pd-l-1">
						BTS
					</div>
					<hr class="mg-1">
					<div class="row pd-l-1">
						<div class="small-8 medium-10 columns">
							BTS
						</div>
						<div class="medium-2 show-for-medium columns">
							<a class="button mg-b-0" href="http://www.bts.co.th/customer/th/main.aspx" target="_blank">More Info</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="mg-b-3 mg-t-1">
		<div class="transportation-container">
			{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-label small-3 medium-1 columns">
					{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-9 medium-11 columns pd-r-0">
					<div class="row pd-t-05 pd-l-1">
						MRT
					</div>
					<hr class="mg-1">
					<div class="row pd-l-1">
						<div class="small-8 medium-10 columns">
							MRT
						</div>
						<div class="medium-2 show-for-medium columns">
							<a class="button mg-b-0" href="http://www.bangkokmetro.co.th/index.aspx?Lang=En" target="_blank">More Info</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="mg-b-3 mg-t-1">
		<div class="transportation-container">
			{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-label small-3 medium-1 columns">
					{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-9 medium-11 columns pd-r-0">
					<div class="row pd-t-05 pd-l-1">
						BMTA
					</div>
					<hr class="mg-1">
					<div class="row pd-l-1">
						<div class="small-8 medium-10 columns">
							BMTA
						</div>
						<div class="medium-2 show-for-medium columns">
							<a class="button mg-b-0" href="http://www.bmta.co.th/?q=th/home" target="_blank">More Info</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="mg-b-3 mg-t-1">
	</div>

	<!-- Mobile -->
	<div class="show-for-small-only columns">
		<div class="content-box">
			<div class="transportation-container">
				{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"transportation-picture-mobile")) !!}

				<div>
					<div class="transportation-label small-3 columns">
						{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
					</div>
					<div class="transportation-content small-9 columns">
						<div class="row">
							BTS
						</div>
						<hr>
						<div class="row">
							BTS
						</div>
					</div>
				</div>
				<div class="row show-for-small-only columns mg-t-1">
					<div class="small-12 small-centered columns">
						<a class="button small-12 columns mg-0" href="http://www.bmta.co.th/?q=th/home" target="_blank">More Info</a>
					</div>
				</div>
			</div>
		</div>
		<hr class="mg-b-1 mg-t-1">
		<div class="content-box">
			<div class="transportation-container">
				{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"transportation-picture-mobile")) !!}

				<div>
					<div class="transportation-label small-3 columns">
						{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
					</div>
					<div class="transportation-content small-9 columns">
						<div class="row">
							MRT
						</div>
						<hr>
						<div class="row">
							MRT
						</div>
					</div>
				</div>
				<div class="row show-for-small-only columns mg-t-1">
					<div class="small-12 small-centered columns">
						<a class="button small-12 columns mg-0" href="http://www.bmta.co.th/?q=th/home" target="_blank">More Info</a>
					</div>
				</div>
			</div>
		</div>
		<hr class="mg-b-1 mg-t-1">
		<div class="content-box mg-b-2">
			<div class="transportation-container">
				{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"transportation-picture-mobile")) !!}

				<div>
					<div class="transportation-label small-3 columns">
						{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
					</div>
					<div class="transportation-content small-9 columns">
						<div class="row">
							BMTA
						</div>
						<hr>
						<div class="row">
							BMTA
						</div>
					</div>
				</div>
				<div class="row show-for-small-only columns mg-t-1">
					<div class="small-12 small-centered columns">
						<a class="button small-12 columns mg-0" href="http://www.bmta.co.th/?q=th/home" target="_blank">More Info</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include("web.footer")
@stop
