@extends("..layouts.head")


@section("specific_css")

@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")

<section>
	<div class="banner-containers show-for-large">
		{!! HTML::image("uploads/normal/banner/trip_large.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-medium-only">
		{!! HTML::image("uploads/normal/banner/trip_medium.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-small-only">
		{!! HTML::image("uploads/normal/banner/trip_small.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
</section>

<div class="body-section">
    <div class="banner-page-title mg-b-1">
       <span lang="th">Recommendation Trips</span>
       <span lang="en">Recommendation Trips</span>
       <span lang="jp">Recommendation Trips</span>
       <span lang="ch">Recommendation Trips</span>
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
                       <span lang="th"><h5>One day trip</h5></span>
                       <span lang="en"><h5>One day trip</h5></span>
                       <span lang="jp"><h5>One day trip</h5></span>
                       <span lang="ch"><h5>One day trip</h5></span>
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
	                            <a class="button small-12 columns hide-for-print" href="one-day-trip">
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
                       <span lang="th"><h5>Two day trip</h5></span>
                       <span lang="en"><h5>Two day trip</h5></span>
                       <span lang="jp"><h5>Two day trip</h5></span>
                       <span lang="ch"><h5>Two day trip</h5></span>
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
	                            <a class="button small-12 columns hide-for-print" href="trip">
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
                       <span lang="th"><h5>Half day trip</h5></span>
                       <span lang="en"><h5>Half day trip</h5></span>
                       <span lang="jp"><h5>Half day trip</h5></span>
                       <span lang="ch"><h5>Half day trip</h5></span>
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
	                            <a class="button small-12 columns hide-for-print" href="trip">
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
                       <span lang="th"><h5>Discover Thai civilization in the museum</h5></span>
                       <span lang="en"><h5>Discover Thai civilization in the museum</h5></span>
                       <span lang="jp"><h5>Discover Thai civilization in the museum</h5></span>
                       <span lang="ch"><h5>Discover Thai civilization in the museum</h5></span>
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
	                            <a class="button small-12 columns hide-for-print" href="trip">
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
                       <span lang="th"><h5>Half day trip</h5></span>
                       <span lang="en"><h5>Half day trip</h5></span>
                       <span lang="jp"><h5>Half day trip</h5></span>
                       <span lang="ch"><h5>Half day trip</h5></span>
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
	                            <a class="button small-12 columns hide-for-print" href="trip">
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
                       <span lang="th"><h5>Half day trip</h5></span>
                       <span lang="en"><h5>Half day trip</h5></span>
                       <span lang="jp"><h5>Half day trip</h5></span>
                       <span lang="ch"><h5>Half day trip</h5></span>
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
	                            <a class="button small-12 columns hide-for-print" href="trip">
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
                       <span lang="th"><h5>Half day trip</h5></span>
                       <span lang="en"><h5>Half day trip</h5></span>
                       <span lang="jp"><h5>Half day trip</h5></span>
                       <span lang="ch"><h5>Half day trip</h5></span>
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
	                            <a class="button small-12 columns hide-for-print" href="trip">
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
