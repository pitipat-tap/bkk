@extends("..layouts.head")

@section("specific_title")
 : One Day Trip
@stop

@section("specific_css")

@stop


@section("specific_js_head")

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
		{!! HTML::image("uploads/normal/trips/trip2/trip2-banner-large.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-medium-only">
		{!! HTML::image("uploads/normal/trips/trip2/trip2-banner-medium.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-small-only">
		{!! HTML::image("uploads/normal/trips/trip2/trip2-banner-small.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
</section>

<div class="body-section">
	<div class="banner-page-title">Recommend Trips</div>
	<div class="timeline-container">
		<h2>One day trip</h2>
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
							<h4 class="timeline-title">Bangkok Art and Culture Centre</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("uploads/normal/trips/trip2/trip1.jpg","bkk-logo",array("class"=>"")) !!}
						<p>
							Bangkok Art & Culture Centre (BACC) is a new mid-town facility for the contemporary arts. Programmes for art, music, theatre, film, design, and cultural/educational events take place in a friendly and recreational atmosphere – with cafe, restaurants, bookshops, and an art library being part of the facility.
						</p>
						<div class="row readmore">
							<a href="http://128.199.92.74/attraction/65" target="_blank">
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
							<h4 class="timeline-title">Madame Tussauds Thailand</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("uploads/normal/trips/trip2/trip2.jpg","bkk-logo",array("class"=>"")) !!}
						<p>
							Madame Tussauds is a wax museum owned and operated by Merlin Entertainments. One of its branch is in 6th-7th floor Siam Discovery Bangkok, Thailand. It was founded by wax sculptor Marie Tussaud and was formerly known as “Madame Tussaud’s”.
						</p>
						<div class="row readmore">
							<a href="http://128.199.92.74/attraction/72" target="_blank">
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
						<h4 class="timeline-title">Wat Pathum Wanaram Rajaworavihara</h4>
					</div>
					<div class="timeline-body">
						{!! HTML::image("uploads/normal/trips/trip2/trip3.jpg","bkk-logo",array("class"=>"")) !!}
						<p>
							Wat Mangkon Kammalawat or Leng Noei Yi temple is a Chinese Buddhist temple in Thailand, located on Charoen Krung Road between Charoen Krung 19 and 21 alleys in Pom Prap Sattru Phai district of Bangkok.
						</p>
						<div class="row readmore">
							<a href="http://128.199.92.74/attraction/125" target="_blank">
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
							<h4 class="timeline-title">Erawan Shrine</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("uploads/normal/trips/trip2/trip4.jpg","bkk-logo",array("class"=>"")) !!}
						<p>
							At the end of the year in 1955, The union of Thai hotel and tourism company limited, the founder of the erawan hotel was told by rear admiral Luang Suwichanphaet, who specialized in astrology, that the original moment for laying the foundation stone of the erawan hotel was not really right auspicious moment.
						</p>
						<div class="row readmore">
							<a href="http://128.199.92.74/attraction/41" target="_blank">
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
