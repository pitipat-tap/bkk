@extends("..layouts.head")


@section("specific_css")

@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")

<section>
	<div class="banner-containers show-for-large">
		{!! HTML::image("http://placehold.it/1500x500","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-medium-only">
		{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-small-only">
		{!! HTML::image("http://placehold.it/300x400","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
</section>

<div class="body-section">
    <div class="banner-page-title mg-b-1">
       <span lang="th">Transportaion</span>
       <span lang="en">Transportaion</span>
       <span lang="jp">Transportaion</span>
       <span lang="ch">Transportaion</span>
    </div>

	<div class="">
		<div class="transportation-container">
			{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-label large-1 show-for-large column">
					{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-12 large-11 columns">
					<div class="row">
						<h5>BTS</h5>
					</div>
					<hr class="mg-1 show-for-large">
					<div class="row">
						<div class="small-12 large-10 columns">
							<p lang="th">
								Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
							</p>
							<p lang="en">
								Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
							</p>
							<p lang="jp">
								Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
							</p>
							<p lang="ch">
								Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
							</p>
						</div>
						<div class="row">
							<div class="small-12 small-centered large-2 large-uncentered columns">
	                            <a class="button small-12 columns hide-for-print" href="http://www.bts.co.th/customer/th/main.aspx" target="_blank">
	                                <span lang="th">More Info</span>
	                                <span lang="en">More Info</span>
	                                <span lang="jp">More Info</span>
	                                <span lang="ch">More Info</span>
	                            </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="mg-b-3 mg-t-1">
		<div class="transportation-container">
			{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-label large-1 show-for-large column">
					{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-12 large-11 columns">
					<div class="row">
						<h5>MRT</h5>
					</div>
					<hr class="mg-1 show-for-large">
					<div class="row">
						<div class="small-12 large-10 columns">
							<p lang="th">
								Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
							</p>
							<p lang="en">
								Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
							</p>
							<p lang="jp">
								Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
							</p>
							<p lang="ch">
								Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
							</p>
						</div>
						<div class="row">
							<div class="small-12 small-centered large-2 large-uncentered columns">
								<a class="button small-12 columns hide-for-print" href="http://www.bangkokmetro.co.th/index.aspx?Lang=En" target="_blank">
	                                <span lang="th">More Info</span>
	                                <span lang="en">More Info</span>
	                                <span lang="jp">More Info</span>
	                                <span lang="ch">More Info</span>
	                            </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="mg-b-3 mg-t-1">
		<div class="transportation-container">
			{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-label large-1 show-for-large columns">
					{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-12 large-11 columns">
					<div class="row">
						<h5>BMTA</h5>
					</div>
					<hr class="mg-1 show-for-large">
					<div class="row">
						<div class="small-12 large-10 columns">
							<p lang="th">
								Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
							</p>
							<p lang="en">
								Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
							</p>
							<p lang="jp">
								Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
							</p>
							<p lang="ch">
								Donec non semper lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
							</p>
						</div>
						<div class="row">
							<div class="small-12 small-centered large-2 large-uncentered columns">
								<a class="button small-12 columns hide-for-print" href="http://www.bmta.co.th/?q=th/home" target="_blank">
	                                <span lang="th">More Info</span>
	                                <span lang="en">More Info</span>
	                                <span lang="jp">More Info</span>
	                                <span lang="ch">More Info</span>
	                            </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="mg-b-3 mg-t-1">
	</div>
</div>
@include("web.footer")
@stop
