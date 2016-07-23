@extends("..layouts.head")

@section("specific_title")
 : About Us
@stop

@section("specific_css")

@stop


@section("specific_js_head")
{!! Html::script("js/verge.min.js") !!}
@stop


@section("body")

<script>
$(document).ready(function(){
    $('.aboutus-img-frame').click(function(){
        $('.selected-img').css({'display':'block','opacity':'1'});
        $('#selected')[0].src = ($(this).children(":first")[0].src);
    });
    $('.selected-img').click(function(){
        $('.selected-img').css({'display':'none','opacity':'0'});
    });
});
</script>

@include("web.top-menu")

<section>
	<div class="selected-img">
        <div class="selected-frame" align="center">
            <img id="selected" src="">
        </div>
    </div>
	<div class="banner-page-title">About Us</div>
	<div id="aboutus" class="body-section">
		<h3 class="align-center mg-t-1"> กองการท่องเที่ยวกรุงเทพมหานคร </h3>
		<div class="align-center">
			<a lang="th" class="aboutus-img-frame">
				{!! HTML::image("uploads/normal/aboutus/aboutus-th.jpg","bkk-logo",array("class"=>"aboutus-picture")) !!}
			</a>
			<a lang="en" class="aboutus-img-frame">
				{!! HTML::image("uploads/normal/aboutus/aboutus-en.jpg","bkk-logo",array("class"=>"aboutus-picture")) !!}
			</a>
			<a lang="jp" class="aboutus-img-frame">
				{!! HTML::image("uploads/normal/aboutus/aboutus-en.jpg","bkk-logo",array("class"=>"aboutus-picture")) !!}
			</a>
			<a lang="ch" class="aboutus-img-frame">
				{!! HTML::image("uploads/normal/aboutus/aboutus-en.jpg","bkk-logo",array("class"=>"aboutus-picture")) !!}
			</a>
		</div>
		<div class="content-box mg-b-1">
			<h4 class="align-center">ประวัติ</h4>
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กองการท่องเที่ยว สำนักวัฒนธรรม กีฬา และการท่องเที่ยว มีชื่อภาษาอังกฤษว่า Bangkok Tourism Division, 
				Culture, Sports and Tourism Department แต่เดิมคือ ศูนย์ส่งเสริมการท่องเที่ยวกรุงเทพมหานคร (ศทท.)    
				ซึ่งจัดตั้งขึ้นตามนโยบายของ ดร. พิจิตต รัตตกุล อดีตผู้ว่าราชการกรุงเทพมหานคร เมื่อเดือนพฤศจิกายน 2540  
				เพื่อสนับสนุนโครงการปีท่องเที่ยวไทย 2541-2542 หรือ Amazing Thailand 1998 - 1999 ซึ่งคณะรัฐมนตรี      
				ได้มีมติเมื่อวันที่ 17 เมษายน 2540 อนุมัติให้จัดตั้งขึ้นเนื่องจากที่ประเทศไทยเป็นเจ้าภาพจัดการแข่งขันกีฬา 
				เอเชี่ยนเกมส์ ครั้งที่ 13 ปี 2541 และงานเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว เนื่องในวโรกาส          
				พระราชพิธีมหามงคลเฉลิมพระชนมพรรษา ครบ 6 รอบ ในวันที่ 5 ธันวาคม 2542 
				<br>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ศูนย์ส่งเสริมการท่องเที่ยวกรุงเทพมหานคร 
				เริ่มแรกที่จัดตั้งนั้นมีวัตถุประสงค์เพื่อบริการข้อมูลข่าวสารด้านการท่องเที่ยวของกรุงเทพมหานคร 
				ซึ่งแบ่งพื้นที่การปกครองออกเป็น 50 เขต 
				แต่ละเขตล้วนมีของดีของเด่นสมควรแก่การเผยแพร่ประชาสัมพันธ์แก่นักท่องเที่ยวทั้งชาวไทยและชาวต่างประเทศไ
				ด้รู้จักมากขึ้น อันจะส่งผลให้นักท่องเที่ยวเกิดความสนใจที่จะท่องเที่ยวและพักค้างคืนในกรุงเทพฯมากขึ้น 
				ถือเป็นหนทางหนึ่ง ซึ่งจะนำรายได้เข้าประเทศและเป็นการกระจายรายได้ให้แก่คนในท้องถิ่นเพิ่มขึ้น 
				ด้วยถือว่ากรุงเทพมหานครเป็นเมืองหลวงของประเทศไทย จึงไม่ควรมองข้ามความสำคัญและมองเห็นเป็นเมืองผ่าน 
				แท้จริงแล้วกรุงเทพมหานครนั้นเปรียบเสมือนเมืองหน้าด่านในการต้อนรับนักท่องเที่ยวโดยเฉพาะชาวต่างประเทศ 
				จึงเป็นจุดแรกที่จะสร้างความประทับใจให้แก่นักท่องเที่ยวเหล่านี้ โดยแรกเริ่มเปิดดำเนินการตั้งแต่วันที่ 11 
				พฤศจิกายน 2540 มีที่ทำการ ณ ห้องทำงานเล็กบนชั้น 2 ของศาลาว่าการกรุงเทพมหานคร 
				เป็นเพียงแค่ที่ทำการชั่วคราว โดยสังกัดกองทรัพยากรมนุษย์ สำนักนโยบายและแผนกรุงเทพมหานคร 
				<br>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่ 16 มีนาคม 2541 ได้ตั้งเป็นศูนย์ส่งเสริมการท่องเที่ยวกรุงเทพมหานคร 
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่ 2 มิถุนายน 2542 ได้จัดตั้งฝ่ายประสานงานและประชาสัมพันธ์การท่องเที่ยว และได้ย้ายมาสังกัด 
				กองประชาสัมพันธ์ สำนักปลัดกรุงเทพมหานคร 
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เดือนสิงหาคม 2542 ย้ายมาที่ทำการปัจจุบันเป็นการถาวรที่อาคารเชิงสะพานปิ่นเกล้า 
				ถนนพระอาทิตย์(ครัววังหน้าเดิม) 
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่ 1 กรกฎาคม 2546 ศูนย์ส่งเสริมการท่องเที่ยวกรุงเทพมหานคร 
				ได้ขยายโครงสร้างหน่วยงานและเปลี่ยนชื่อเป็น “กองการท่องเที่ยว” สำนักปลัดกรุงเทพมหานคร 
				<br>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วยภารกิจที่มากขึ้นของกรุงเทพมหานครในด้านต่างๆ 
				ทำให้กรุงเทพมหานครได้มีการปรับโครงสร้างการบริหารงานของกรุงเทพมหานครขึ้น ในวันที่ 10 มิถุนายน 2548 
				โดยแบ่งหน้าที่และความรับผิดชอบของสำนักต่างๆ ให้มีความชัดเจนมากยิ่งขึ้น และได้จัดตั้ง สำนักวัฒนธรรม กีฬา 
				และการท่องเที่ยว และให้โอนย้ายกองการท่องเที่ยวมาอยู่ภายใต้การควบคุมดูแลโดยตรงของสำนักวัฒนธรรม กีฬา 
				และการท่องเที่ยว นับตั้งแต่นั้นเป็นต้นมา 
				<br>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปัจจุบันกองการท่องเที่ยว สำนักวัฒนธรรม กีฬา และการท่องเที่ยว ตั้งอยู่เลขที่ 17/1 ถนนพระอาทิตย์ 
				แขวงพระบรมมหาราชวัง เขตพระนคร กรุงเทพฯ 10200 โทรศัพท์ 02-225-7612-4 โทรสาร 02-225-7616 
				เปิดทำการทุกวันจันทร์ถึงวันศุกร์ตั้งแต่เวลา 08.00 น. - 19.00 น. และวันเสาร์ถึงวันอาทิตย์ ตั้งแต่เวลา 09.00 น. - 17.00 น.
			</p>
			<div class="row mg-t-2">
				<div class="small-9 medium-7 large-9  columns" align="center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.327923570138!2d100.49096021639426!3d13.759087656345015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd55c5a3036726e66!2sTourism+Division%3B+Culture%2C+Sports+and+Tourism+Department%3B+BMA!5e0!3m2!1sen!2sth!4v1462784638517" width="90%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
				<div class="small-9 medium-5 large-3  columns">
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
</section>
@include("web.footer")
@stop
