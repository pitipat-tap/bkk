@extends("..layouts.head")


@section("specific_css")

@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")
@include("web.banner-picture")

<div class="body-section">
    <div class="banner-page-title mg-b-1">
       <span lang="th">Recommendation Trips</span>
       <span lang="en">Recommendation Trips</span>
       <span lang="jp">Recommendation Trips</span>
       <span lang="ch">Recommendation Trips</span>
    </div>

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
                       <span lang="th">One day trip</span>
                       <span lang="en">One day trip</span>
                       <span lang="jp">One day trip</span>
                       <span lang="ch">One day trip</span>
					</div>
					<hr class="mg-1">
					<div class="row pd-l-1">
						<div class="small-8 large-10 columns">
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
						<div class="large-2 show-for-large columns">
                            <a class="button mg-b-0" href="trip">
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
		<hr class="mg-b-3 mg-t-1">
		<div class="transportation-container">
			{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-label small-3 large-1 columns">
					{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-9 large-11 columns pd-r-0">
					<div class="row pd-t-05 pd-l-1">
                       <span lang="th">Two day trip</span>
                       <span lang="en">Two day trip</span>
                       <span lang="jp">Two day trip</span>
                       <span lang="ch">Two day trip</span>
					</div>
					<hr class="mg-1">
					<div class="row pd-l-1">
						<div class="small-8 large-10 columns">
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
						<div class="large-2 show-for-large columns">
							<a class="button mg-b-0" href="trip">
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
		<hr class="mg-b-3 mg-t-1">
		<div class="transportation-container">
			{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-label small-3 large-1 columns">
					{!! HTML::image("http://placehold.it/120x120","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-9 large-11 columns pd-r-0">
					<div class="row pd-t-05 pd-l-1">
                       <span lang="th">Half day trip</span>
                       <span lang="en">Half day trip</span>
                       <span lang="jp">Half day trip</span>
                       <span lang="ch">Half day trip</span>
					</div>
					<hr class="mg-1">
					<div class="row pd-l-1">
						<div class="small-8 large-10 columns">
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
						<div class="large-2 show-for-large columns">
							<a class="button mg-b-0" href="trip">
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
		<hr class="mg-b-3 mg-t-1">
	</div>

	<!-- Mobile -->
	<div class="hide-for-large columns">
		<div class="content-box">
			<div class="transportation-container">
				{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"transportation-picture-mobile")) !!}

				<div class="transportation-content small-12 columns">
					<h5 lang="th">One days trip</h5>
					<h5 lang="en">One days trip</h5>
					<h5 lang="jp">One days trip</h5>
					<h5 lang="ch">One days trip</h5>
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
				<div class="row columns mg-t-1">
					<div class="small-12 small-centered columns">
						<a class="button small-12 columns mg-0" href="trip">
                           <span lang="th">More Info</span>
                           <span lang="en">More Info</span>
                           <span lang="jp">More Info</span>
                           <span lang="ch">More Info</span>
                        </a>
					</div>
				</div>
			</div>
		</div>
		<hr class="mg-b-1 mg-t-1">
		<div class="content-box">
			<div class="transportation-container">
				{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"transportation-picture-mobile")) !!}

				<div class="transportation-content small-12 columns">
					<h5 lang="th">Two days trip</h5>
					<h5 lang="en">Two days trip</h5>
					<h5 lang="jp">Two days trip</h5>
					<h5 lang="ch">Two days trip</h5>
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
				<div class="row columns mg-t-1">
					<div class="small-12 small-centered columns">
						<a class="button small-12 columns mg-0" href="trip">
                           <span lang="th">More Info</span>
                           <span lang="en">More Info</span>
                           <span lang="jp">More Info</span>
                           <span lang="ch">More Info</span>
                        </a>
					</div>
				</div>
			</div>
		</div>
		<hr class="mg-b-1 mg-t-1">
		<div class="content-box mg-b-2">
			<div class="transportation-container">
				{!! HTML::image("http://placehold.it/1248x416","bkk-logo",array("class"=>"transportation-picture-mobile")) !!}

				<div class="transportation-content small-12 columns">
					<h5 lang="th">Half day trip</h5>
					<h5 lang="en">Half day trip</h5>
					<h5 lang="jp">Half day trip</h5>
					<h5 lang="ch">Half day trip</h5>
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
				<div class="row columns mg-t-1">
					<div class="small-12 small-centered columns">
						<a class="button small-12 columns mg-0" href="trip">
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
@include("web.footer")
@stop
