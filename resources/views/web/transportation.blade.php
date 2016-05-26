@extends("..layouts.head")


@section("specific_css")

@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")
@include("web.banner-picture")

<div class="body-section">
	<div class="banner-page-title mg-b-1">Transportaion</div>

	<!-- Desktop -->
	<div class="show-for-large columns">
		<div class="transportation-container">
			{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-label small-3 large-1 columns">
					{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-9 large-11 columns pd-r-0">
					<div class="row pd-t-05 pd-l-1">
						BTS
					</div>
					<hr class="mg-1">
					<div class="row pd-l-1">
						<div class="small-8 large-10 columns">
							<p>
								Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
							</p>
						</div>
						<div class="large-2 show-for-large columns">
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
				<div class="transportation-label small-3 large-1 columns">
					{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-9 large-11 columns pd-r-0">
					<div class="row pd-t-05 pd-l-1">
						MRT
					</div>
					<hr class="mg-1">
					<div class="row pd-l-1">
						<div class="small-8 large-10 columns">
							<p>
								Aliquam orci ante, egestas et imperdiet ac, bibendum vitae orci. Pellentesque mi metus.
							</p>
						</div>
						<div class="large-2 show-for-large columns">
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
				<div class="transportation-label small-3 large-1 columns">
					{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-9 large-11 columns pd-r-0">
					<div class="row pd-t-05 pd-l-1">
						BMTA
					</div>
					<hr class="mg-1">
					<div class="row pd-l-1">
						<div class="small-8 large-10 columns">
							<p>
								Aliquam tempus elit libero, sed pretium purus viverra eu. In pulvinar urna id magna tristique lacinia.
						</div>
						<div class="large-2 show-for-large columns">
							<a class="button mg-b-0" href="http://www.bmta.co.th/?q=th/home" target="_blank">More Info</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="mg-b-3 mg-t-1">
	</div>

	<!-- Mobile -->
	<div class="hide-for-large columns">
		<div class="content-box">
			<div class="transportation-container">
				{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"transportation-picture-mobile")) !!}

				<div class="transportation-content small-12 columns">
					<h5>BTS</h5>
					<p>
						Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
					</p>
				</div>
				<div class="row columns mg-t-1">
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

				<div class="transportation-content small-12 columns">
					<h5>MRT</h5>
					<p>
						Aliquam orci ante, egestas et imperdiet ac, bibendum vitae orci. Pellentesque mi metus.
					</p>
				</div>
				<div class="row columns mg-t-1">
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

				<div class="transportation-content small-12 columns">
					<h5>BMTA</h5>
					<p>
						Aliquam tempus elit libero, sed pretium purus viverra eu. In pulvinar urna id magna tristique lacinia.
					</p>
				</div>
				<div class="row columns mg-t-1">
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
