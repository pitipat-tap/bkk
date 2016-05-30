@extends("..layouts.head")


@section("specific_css")

@stop


@section("specific_js_head")
{!! Html::script("js/timeline.js") !!}
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
							<h4 class="timeline-title">The Grand Palace</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
						<p>
							Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. 
							Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é 
							amistosis quis leo. Manduma pindureta quium dia nois paga.
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
							<h4 class="timeline-title">National Museum</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
						<p>
							"Originally was the personal museum of King Rama 4 with a collection of antiques and royal gifts, King Rama 5 subsequently opened the Sahathai Samakhom pavilion (Concordia tower) in the grand palace grounds as a public museum. It was then moved to the three palace buildings in the front palace (Wang Na). King Rama 7 then gave over all buildings in the front palace to be the Bangkok museum.
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
						<h4 class="timeline-title">Santi Chai Prakan Park</h4>
					</div>
					<div class="timeline-body">
						{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
						<p>
							This area used to be the situation of sugar factory and a godown of Sri Maharacha Co.,ltd. Later, it was renovated and landscape adjustment in the area about 3.2 acres was done, it was completed in 1999, H.M.King Rama IX graciously named Santi Chai Prakarn Park, meaning the park with a fort that synbolized the victory of peacefulness.
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
							<h4 class="timeline-title">Khao San Road</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
						<p>
							This road used to be a rice trading place. These days it has become one of the most economical tourist attractions for foreigners because of moderately priced accommodation and nightlife entertainment.
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
							<h4 class="timeline-title">Ratchadamnoen Klang Road</h4>
						</div>
					<div class="timeline-body">
						{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
						<p>
							Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. 
							Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é 
							amistosis quis leo. Manduma pindureta quium dia nois paga.
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
						<h4 class="timeline-title">The Golden Mount</h4>
					</div>
					<div class="timeline-body">
						{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
						<p>
							Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. 
							Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é 
							amistosis quis leo. Manduma pindureta quium dia nois paga.
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
