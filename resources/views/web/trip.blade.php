@extends("..layouts.head")


@section("specific_css")

@stop


@section("specific_js_head")
{!! Html::script("js/timeline.js") !!}
@stop


@section("body")

@include("web.top-menu")

<section>
	<div class="banner-container show-for-large columns">
		{!! HTML::image("http://placehold.it/1500x500","bkk-logo",array("class"=>"banner-picture")) !!}
	</div>
	<div class="banner-container hide-for-large columns">
		{!! HTML::image("http://placehold.it/300x400","bkk-logo",array("class"=>"banner-picture")) !!}
	</div>
</section>

<div class="body-section">
	<div class="banner-page-title">Recommend Trips</div>
	<div class="timeline-container">
		<h2>Two days trip</h2>
		<div class="row">
			<div class="label-start">
				<h3>Day 1</h3>
			</div>
		</div>
		<ul class="timeline">
	        <li>
				<div class="timeline-badge"></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Header1</h4>
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
							<h4 class="timeline-title">Header2</h4>
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
						<h4 class="timeline-title">Header3</h4>
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
				<h3>End Day 1</h3>
			</div>
		</div>

		<div class="row">
			<div class="label-start">
				<h3>Day 2</h3>
			</div>
		</div>
		<ul class="timeline">
	        <li>
				<div class="timeline-badge"></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Header1</h4>
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
							<h4 class="timeline-title">Header2</h4>
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
						<h4 class="timeline-title">Header3</h4>
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
				<h3>End Day 2</h3>
			</div>
		</div>
	</div>
</div>
@include("web.footer")
@stop
