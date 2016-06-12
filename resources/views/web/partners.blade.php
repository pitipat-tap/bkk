@extends("..layouts.head")

@section("specific_title")
 : Partners
@stop

@section("specific_css")
{!! Html::style("css/partners.css") !!}
@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")

<div class="banner-page-title">Our Partners</div>
<div class="body-section mg-b-2 mg-t-1">
	<div class="small-12 small-centered">
	    <ul class="partners">
	    	<li>
	            <div>
	            	<a href="http://www.agoda.com/" target="_blank"><img class="thumbnail-container" src="images/logo/agoda-logo.png" alt=""></a>
	            </div>
	            <div><h5>agoda</h5></div>
	        </li>
	        <li>
	            <div>
	            	<a href="https://www.tripadvisor.com/" target="_blank"><img class="thumbnail-container" src="images/logo/trip-logo.png" alt=""></a>
	            </div>
	            <div><h5>trip advisor</h5></div>
	        </li>
	        <li>
	        	<div>
	            	<a href="http://vrtweb.rd.go.th/" target="_blank"><img class="thumbnail-container" src="images/logo/footer/vat.png" alt=""></a>
	            </div>
	            <div><h5>vat</h5></div>
	        </li>
	        <li>
	            <div>
	            	<a href="http://www.atta.or.th/" target="_blank"><img class="thumbnail-container" src="images/logo/footer/atta.png" alt=""></a>
	            </div>
	            <div><h5>atta</h5></div>
	        </li>
	        <li>
	            <div>
	            	<a href="http://www.tourismthailand.org/" target="_blank"><img class="thumbnail-container" src="images/logo/footer/amazing-thailand.png" alt=""></a>
	            </div>
	            <div><h5>amazing thai</h5></div>
	        </li>
	        <li>
	            <div>
	            	<a href="http://lowermekong.org" target="_blank"><img class="thumbnail-container" src="images/logo/footer/lmi.png" alt=""></a>
	            </div>
	            <div><h5>lower makong</h5></div>
	        </li>
	        <li>
	            <div>
	            	<a href="http://www.bangkok.go.th/" target="_blank"><img class="thumbnail-container" src="images/logo/footer/bangkok-metro.png" alt=""></a>
	            </div>
	            <div><h5>bma</h5></div>
	        </li>
	        <li>
	        	<div>
	            	<a href="http://www.touristpolice.go.th/" target="_blank"><img class="thumbnail-container" src="images/logo/footer/police.png" alt=""></a>
	            </div>
	            <div><h5>tourist police</h5></div>
	        </li>
	        <li>
	            <div>
	            	<a href="http://airportthai.co.th/" target="_blank"><img class="thumbnail-container" src="images/logo/footer/aot.png" alt=""></a>
	            </div>
	            <div><h5>aot</h5></div>
	        </li>
	    </ul>
	</div>
</div>
@include("web.footer")
@stop
