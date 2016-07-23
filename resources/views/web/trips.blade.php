@extends("..layouts.head")

@section("specific_title")
 : Trips
@stop

@section("specific_css")

@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")

<section>
	<div class="banner-containers">
        <img class="banner-picture" data-interchange="[uploads/normal/banner/trip_small.jpg, small], [uploads/normal/banner/trip_medium.jpg, medium], [uploads/normal/banner/trip_large.jpg, large]">
    </div>
</section>

<div class="body-section">
    <div id="trips-banner-page-title" class="banner-page-title mg-b-1">
       <span lang="th">Recommendation Trips</span>
       <span lang="en">Recommendation Trips</span>
       <span lang="jp">Recommendation Trips</span>
       <span lang="ch">Recommendation Trips</span>
    </div>

	<div class="">
		<div class="transportation-container">
			{!! HTML::image("uploads/normal/trips/trip1/trip1-banner-large.jpg","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-content small-12 large-12 columns">
					<div class="row mg-l-0">
                       <span lang="th"><h5>One day historical trip</h5></span>
                       <span lang="en"><h5>One day historical trip</h5></span>
                       <span lang="jp"><h5>One day historical trip</h5></span>
                       <span lang="ch"><h5>One day historical trip</h5></span>
					</div>
					<hr class="mg-1 show-for-large">
					<div class="row mg-l-0">
						<div class="small-12 large-10 columns">
							<p lang="th">
								Enjoy Thailand’s most famous historical places in one go. Since the beginning of the day until the last hour of the day. From temple to nightlife which you shouldn’t miss if you come to Thailand.
							</p>
							<p lang="en">
								Enjoy Thailand’s most famous historical places in one go. Since the beginning of the day until the last hour of the day. From temple to nightlife which you shouldn’t miss if you come to Thailand.
							</p>
							<p lang="jp">
								Enjoy Thailand’s most famous historical places in one go. Since the beginning of the day until the last hour of the day. From temple to nightlife which you shouldn’t miss if you come to Thailand.
							</p>
							<p lang="ch">
								Enjoy Thailand’s most famous historical places in one go. Since the beginning of the day until the last hour of the day. From temple to nightlife which you shouldn’t miss if you come to Thailand.
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
		<hr class="mg-b-3">
		<div class="transportation-container">
			{!! HTML::image("uploads/normal/trips/trip2/trip2-banner-large.jpg","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-content small-12 large-12 columns">
					<div class="row mg-l-0">
                       <span lang="th"><h5>One day trip</h5></span>
                       <span lang="en"><h5>One day trip</h5></span>
                       <span lang="jp"><h5>One day trip</h5></span>
                       <span lang="ch"><h5>One day trip</h5></span>
					</div>
					<hr class="mg-1 show-for-large">
					<div class="row mg-l-0">
						<div class="small-12 large-10 columns">
							<p lang="th">
								Unforgettable memories in the heart of Bangkok by visiting art galleries and paying respect the shrine, and temple.
							</p>
							<p lang="en">
								Unforgettable memories in the heart of Bangkok by visiting art galleries and paying respect the shrine, and temple.
							</p>
							<p lang="jp">
								Unforgettable memories in the heart of Bangkok by visiting art galleries and paying respect the shrine, and temple.
							</p>
							<p lang="ch">
								Unforgettable memories in the heart of Bangkok by visiting art galleries and paying respect the shrine, and temple.
							</p>
						</div>
						<div class="row">
							<div class="small-12 small-centered large-2 large-uncentered columns">
	                            <a class="button small-12 columns hide-for-print" href="one-day-trip-2">
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
