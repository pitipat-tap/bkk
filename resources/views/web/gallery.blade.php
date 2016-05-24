@extends("..layouts.head")


@section("specific_css")
@stop


@section("specific_js_head")
{!! Html::script("js/gallery.js") !!}
@stop


@section("body")

@include("web.top-menu")
<div class="body-section">
	<div class="banner-page-title show-for-large large-centered columns mg-b-1">Gallery</div>

	<!-- Desktop -->
	<div class="show-for-large columns">
        <div class="gallery-wrapper">
            <div class="gallery-img">
                {!! HTML::image("images/gallery/01.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/02.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/03.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/04.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/05.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/06.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/07.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/08.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/09.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/10.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/11.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/12.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/13.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/14.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/15.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/16.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/01.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/02.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/03.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/04.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/05.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/06.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/07.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/08.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/09.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/10.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/11.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/12.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/13.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/14.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/15.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
            <div class="gallery-img">
                {!! HTML::image("images/gallery/16.jpg","bkk-gallery",array("class"=>"")) !!}
            </div>
        </div>
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
