@extends("..layouts.head")


@section("specific_css")

@stop


@section("specific_js_head")
{!! Html::script("js/timeline.js") !!}
@stop


@section("body")

<script>
    window.onbeforeprint = function() {
        console.log($('.bounce-in'));
    };

    (function() {
            var beforePrint = function() {
                $('.timeline-panel').removeClass('bounce-in');
                console.log('Functionality to run before printing.');
                            };
        var afterPrint = function() {
                console.log('Functionality to run after printing');
                $('.timeline-panel').addClass('bounce-in');
                        };

        if (window.matchMedia) {
            var mediaQueryList = window.matchMedia('print');
            mediaQueryList.addListener(function(mql) {
                if (mql.matches) {
                    beforePrint();
                } else {
                    afterPrint();
                }
            });
        }

        window.onbeforeprint = beforePrint;
        window.onafterprint = afterPrint;
    }());
</script>
@include("web.top-menu")

<section>
	<div class="banner-containers show-for-large">
		{!! HTML::image("uploads/normal/trips/trip1/trip1-banner-large.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-medium-only">
		{!! HTML::image("uploads/normal/trips/trip1/trip1-banner-medium.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-small-only">
		{!! HTML::image("uploads/normal/trips/trip1/trip1-banner-small.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
</section>

<div class="body-section">
	<div class="banner-page-title">Recommend Trips</div>
	<div class="timeline-container">
		<h2>One day historical trip</h2>
		<div class="row">
			<div class="label-start">
				<h3>Start</h3>
			</div>
		</div>
		<ul class="timeline">
	        <li>
				<div class="timeline-badge"></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Wat Pra Kaew</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("uploads/normal/trips/trip1/trip1.jpg","bkk-logo",array("class"=>"")) !!}
						<p>
							Built in 1782 during the reign of King Rama I. It’s divided into 3 main zones; The Outer Court which hosts the Temple of Emerald Buddha and other buildings, the Middle Court which hosts Throne hall, and the Inner Court hosts king’s exclusive throne.
						</p>
						<div class="row readmore">
							<a href="#">
								<div>Read more..</div>
							</a>
						</div>
					</div>
				</div>
	        </li>
	        <li>
				<div class="timeline-badge"></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Wat Pho</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("uploads/normal/trips/trip1/trip2.jpg","bkk-logo",array("class"=>"")) !!}
						<p>
							Initiated this holy temple as “Public University” in the reign of King Rama III. Contain fine collection arts for example, Poetry, Temple history, Medical text, Thai literature, and Buddhism
						</p>
						<div class="row readmore">
							<a href="#">
								<div>Read more..</div>
							</a>
						</div>
					</div>
				</div>
	        </li>
	        <li>
	          	<div class="timeline-badge"></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="timeline-title">Phra Sumen Fort</h4>
					</div>
					<div class="timeline-body">
						{!! HTML::image("uploads/normal/trips/trip1/trip3.jpg","bkk-logo",array("class"=>"")) !!}
						<p>
							Also built in the reign of King Rama 1. The height is 10.50 meters, and made from bricks then coated with cement in octagon shaped. It has earthwork and shelter that protects the  ammunition.
						</p>
						<div class="row readmore">
							<a href="#">
								<div>Read more..</div>
							</a>
						</div>
					</div>
				</div>
	        </li>
	        <li>
				<div class="timeline-badge"></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Golden Mount</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("uploads/normal/trips/trip1/trip4.jpg","bkk-logo",array("class"=>"")) !!}
						<p>
							This ancient temple has existed since the Ayutthaya period. Formerly known as Wat Saket, it was reestablished by king Rama I and was then royally titled “Wat Saket”. As for the Golden Mount, it was first constructed in the reign of King Rama III by emulating the pattern of the Golden Mount of the Ayutthaya period.
						</p>
						<div class="row readmore">
							<a href="#">
								<div>Read more..</div>
							</a>
						</div>
					</div>
				</div>
	        </li>
	        <li>
				<div class="timeline-badge"></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">The National Gallery</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("uploads/normal/trips/trip1/trip5.jpg","bkk-logo",array("class"=>"")) !!}
						<p>
							Was originally called “Rong Kasap Sitthikan” which is Thailand’s Mint. Consequently, the building was renovated and it was used for various fine art exhibitions and is called The National Gallery
						</p>
						<div class="row readmore">
							<a href="#">
								<div>Read more..</div>
							</a>
						</div>
					</div>
				</div>
	        </li>
	        <li>
	          	<div class="timeline-badge"></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="timeline-title">Khao san road</h4>
					</div>
					<div class="timeline-body">
						{!! HTML::image("uploads/normal/trips/trip1/trip6.jpg","bkk-logo",array("class"=>"")) !!}
						<p>
							Was used to be rice trading place. Nowaday it has become one of the most economical tourist attractions for foreign due to its nightlife entertainment.
						</p>
						<div class="row readmore">
							<a href="#">
								<div>Read more..</div>
							</a>
						</div>
					</div>
				</div>
	        </li>
	    </ul>
	    <div class="row">
	    	<div class="label-stop">
				<h3>Finish</h3>
			</div>
		</div>
	</div>
</div>
@include("web.footer")
@stop
