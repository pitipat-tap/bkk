@extends("..layouts.head")


@section("specific_css")

@stop


@section("specific_js_head")
{!! Html::script("js/verge.min.js") !!}
@stop


@section("body")

@include("web.top-menu")

<div class="banner-page-title">About Us</div>
<div class="body-section">
	<h3 class="align-center mg-t-1"> กองการท่องเที่ยวกรุงเทพมหานคร </h3>
	<div class="align-center">
		<a>
			{!! HTML::image("http://placehold.it/800x600","bkk-logo",array("class"=>"mg-b-1")) !!}
		</a>
	</div>
	<div class="content-box mg-b-1">
		<h4 class="align-center">พันธกิจของกองการท่องเที่ยวกรุงเทพมหานคร</h4>
		<p>
			การวางแผนพัฒนาการท่องเที่ยวกรุงเทพมหานครภายใต้นโยบายของรัฐบาล, แผนพัฒนาเศรษฐกิจและสังคมแห่งและแผนพัฒนากรุงเทพฯ. 
			ประสานงานกับฝ่ายที่เกี่ยวข้องรวมทั้งประชาชนในท้องถิ่นประชาชนและภาคเอกชนในการที่จะส่งเสริมและพัฒนาแหล่งท่องเที่ยวฟื้นฟูและรักษาเว็บไซต์และยังสภาพแวดล้อมสำหรับ 
			การท่องเที่ยวพร้อมกับการส่งเสริมการท่องเที่ยวเชิงอนุรักษ์บนพื้นฐานของภูมิปัญญาท้องถิ่น. 
			การส่งเสริมการท่องเที่ยวในสื่อต่างๆและการพัฒนาบริการการท่องเที่ยวกรุงเทพมหานครให้ได้มาตรฐานสากลและอำนวยความสะดวกในนักท่องเที่ยวเป็นศูนย์ข้อมูลการท่องเที่ยว
		</p>
		<div class="align-center">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.327923570138!2d100.49096021639426!3d13.759087656345015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd55c5a3036726e66!2sTourism+Division%3B+Culture%2C+Sports+and+Tourism+Department%3B+BMA!5e0!3m2!1sen!2sth!4v1462784638517" width="90%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="mg-1">
				<p class="address">
	                Address : 17/1 Phra Athit Road,<br>
	                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      Phra Nakhon, Bangkok,<br>
	                 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 10200.<br>
	                Phone  &nbsp&nbsp&nbsp&nbsp: 0-2225-7612-4,<br>
	                Fax     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 0-2225-7615-6<br>
	                Email  &nbsp&nbsp&nbsp&nbsp&nbsp: service@bangkoktourist.com
	            </p>
	        </div>
		</div>
	</div>
</div>
@include("web.footer")
@stop
