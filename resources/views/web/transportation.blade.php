@extends("..layouts.head")

@section("specific_title")
 : Transportation
@stop

@section("specific_css")

@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")

<section>
	<div class="banner-containers show-for-large">
		{!! HTML::image("uploads/normal/banner/transportation_large.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-medium-only">
		{!! HTML::image("uploads/normal/banner/transportation_medium.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-small-only">
		{!! HTML::image("uploads/normal/banner/transportation_small.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
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
			{!! HTML::image("uploads/normal/transportation/bts.jpg","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-label large-1 show-for-large column">
					{!! HTML::image("uploads/normal/transportation/bts-logo.png","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-12 large-11 columns">
					<div class="row">
						<h5>BTS</h5>
					</div>
					<hr class="mg-1 show-for-large">
					<div class="row">
						<div class="small-12 large-10 columns">
							<p lang="th">
								บริษัท ระบบขนส่งมวลชนกรุงเทพ จำกัด (มหาชน)
							</p>
							<p lang="en">
								Bangkok mass transit system public company limited.
							</p>
							<p lang="jp">
								Bangkok mass transit system public company limited.
							</p>
							<p lang="ch">
								Bangkok mass transit system public company limited.
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
			{!! HTML::image("uploads/normal/transportation/mrt.jpg","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-label large-1 show-for-large column">
					{!! HTML::image("uploads/normal/transportation/mrt-logo.png","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-12 large-11 columns">
					<div class="row">
						<h5>MRT</h5>
					</div>
					<hr class="mg-1 show-for-large">
					<div class="row">
						<div class="small-12 large-10 columns">
							<p lang="th">
								บริษัท ทางด่วนและรถไฟฟ้ากรุงเทพ จำกัด (มหาชน)
							</p>
							<p lang="en">
								Bangkok expressway and metro public company limited.
							</p>
							<p lang="jp">
								Bangkok expressway and metro public company limited.
							</p>
							<p lang="ch">
								Bangkok expressway and metro public company limited.
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
			{!! HTML::image("uploads/normal/transportation/bmta.jpg","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-label large-1 show-for-large columns">
					{!! HTML::image("uploads/normal/transportation/bmta-logo.png","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-12 large-11 columns">
					<div class="row">
						<h5>BMTA</h5>
					</div>
					<hr class="mg-1 show-for-large">
					<div class="row">
						<div class="small-12 large-10 columns">
							<p lang="th">
								องค์การขนส่งมวลชนกรุงเทพ
							</p>
							<p lang="en">
								Bangkok Mass Transit Authority.
							</p>
							<p lang="jp">
								Bangkok Mass Transit Authority.
							</p>
							<p lang="ch">
								Bangkok Mass Transit Authority.
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
		<div class="transportation-container">
			{!! HTML::image("uploads/normal/transportation/rft.jpg","bkk-logo",array("class"=>"mg-b-1")) !!}

			<div class="row">
				<div class="transportation-label large-1 show-for-large columns">
					{!! HTML::image("uploads/normal/transportation/rft-logo.jpg","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="transportation-content small-12 large-11 columns">
					<div class="row">
						<h5>Rotfaithai</h5>
					</div>
					<hr class="mg-1 show-for-large">
					<div class="row">
						<div class="small-12 large-10 columns">
							<p lang="th">
								เว็บไซต์สำหรับแฟนรถไฟไทยและการขนส่งระบบรางในประเทศไทย
							</p>
							<p lang="en">
								The Best & Biggest Online Community for Rail Transportation Fans in Thailand.
							</p>
							<p lang="jp">
								The Best & Biggest Online Community for Rail Transportation Fans in Thailand.
							</p>
							<p lang="ch">
								The Best & Biggest Online Community for Rail Transportation Fans in Thailand.
							</p>
						</div>
						<div class="row">
							<div class="small-12 small-centered large-2 large-uncentered columns">
								<a class="button small-12 columns hide-for-print" href="http://www.rotfaithai.com/" target="_blank">
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
