<!-- show only in desktop -->
<section class="hide-for-print">
    <div id="partners" class="top-bar footer top-bar-first show-for-large" align="center">
        <div class="footer-container">
            <div class="row">
                <div class="small-1 large-1 column empty">
                </div>
                <div class="small-5 large-4 column">
                    <a href="http://www.agoda.com/" target="_blank">
                        {!! Html::image("images/logo/agoda-logo.png","",array("class"=>"main-banner")) !!}
                    </a>
                </div>
                <div class="show-for-large large-2 column empty">
                </div>
                <div class="small-5 large-4 column main-banner-container">
                    <a href="https://www.tripadvisor.com/" target="_blank">
                        {!! Html::image("images/logo/trip-logo.png","",array("class"=>"main-banner")) !!}
                    </a>
                </div>
                <div class="small-1 large-1 column empty">
                </div>
            </div>
            <hr>
            <div class="orbit" data-orbit>
                <ul class="orbit-container">
                    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                    <li class="is-active orbit-slide">
                        <ul class="thumbnail-banner">
                            <li>
                                <a href="http://vrtweb.rd.go.th/" target="_blank">
                                    {!! Html::image("images/logo/footer/vat.png","",array("class"=>"partner-thumbnail")) !!}
                                </a>
                            </li>
                            <li>
                                <a href="http://www.atta.or.th/" target="_blank">
                                    {!! Html::image("images/logo/footer/atta.png","",array("class"=>"partner-thumbnail")) !!}
                                </a>
                            </li>
                            <li>
                                <a href="http://www.tourismthailand.org/" target="_blank">
                                    {!! Html::image("images/logo/footer/amazing-thailand.png","",array("class"=>"partner-thumbnail")) !!}
                                </a>
                            </li>
                            <li>
                                <a data-open="lmct" target="_blank">
                                    {!! Html::image("images/logo/footer/lmtc.png","",array("class"=>"partner-thumbnail")) !!}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="orbit-slide">
                        <ul class="thumbnail-banner">
                            <li>
                                <a href="http://www.bangkok.go.th/" target="_blank">
                                    {!! Html::image("images/logo/footer/bangkok-metro.png","",array("class"=>"partner-thumbnail")) !!}
                                    </a>
                            </li>
                            <li>
                                <a href="http://www.touristpolice.go.th/" target="_blank">
                                    {!! Html::image("images/logo/footer/police.png","",array("class"=>"partner-thumbnail")) !!}
                                </a>
                            </li>
                            <li>
                                <a href="http://airportthai.co.th/" target="_blank">
                                    {!! Html::image("images/logo/footer/aot.png","",array("class"=>"partner-thumbnail")) !!}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="reveal lmct" id="lmct" data-reveal data-animation-in="slide-in-down" data-animation-out="slide-out-up">
        <h4 align="center">Lower Mekong Tourism Cities</h4>
        <hr>
        <div class="row">
            <div class="small-6 columns">
                <p lang="th" align="center"><a href="http://www.phnom-penh.co/" target="_blank">พนมเปญ</a></p>
                <p lang="en" align="center"><a href="http://www.phnom-penh.co/" target="_blank">Phnom Penh</a></p>
                <p lang="jp" align="center"><a href="http://www.phnom-penh.co/" target="_blank">Phnom Penh</a></p>
                <p lang="ch" align="center"><a href="http://www.phnom-penh.co/" target="_blank">Phnom Penh</a></p>
            </div>
            <div class="small-6 columns">
                <p lang="th" align="center"><a href="http://www.tourismlaos.org/show.php?Cont_ID=20" target="_blank">เวียงจันทน์</a></p>
                <p lang="en" align="center"><a href="http://www.tourismlaos.org/show.php?Cont_ID=20" target="_blank">Vientiane</a></p>
                <p lang="jp" align="center"><a href="http://www.tourismlaos.org/show.php?Cont_ID=20" target="_blank">Vientiane</a></p>
                <p lang="ch" align="center"><a href="http://www.tourismlaos.org/show.php?Cont_ID=20" target="_blank">Vientiane</a></p>
                
            </div>
            <div class="small-6 columns">
                <p lang="th" align="center"><a href="http://www.eng.hochiminhcity.gov.vn/visitors/Lists/Posts/AllPosts.aspx?CategoryId=14" target="_blank">โฮจิมินห์</a></p>
                <p lang="en" align="center"><a href="http://www.eng.hochiminhcity.gov.vn/visitors/Lists/Posts/AllPosts.aspx?CategoryId=14" target="_blank">Ho Chi Minh City</a></p>
                <p lang="jp" align="center"><a href="http://www.eng.hochiminhcity.gov.vn/visitors/Lists/Posts/AllPosts.aspx?CategoryId=14" target="_blank">Ho Chi Minh City</a></p>
                <p lang="ch" align="center"><a href="http://www.eng.hochiminhcity.gov.vn/visitors/Lists/Posts/AllPosts.aspx?CategoryId=14" target="_blank">Ho Chi Minh City</a></p>
            </div>
            <div class="small-6 columns">
                <p lang="th" align="center"><a href="http://www.ycdc.gov.mm/content.php?yangon=Attraction" target="_blank">ย่างกุ้ง</a></p>
                <p lang="en" align="center"><a href="http://www.ycdc.gov.mm/content.php?yangon=Attraction" target="_blank">Yangon</a></p>
                <p lang="jp" align="center"><a href="http://www.ycdc.gov.mm/content.php?yangon=Attraction" target="_blank">Yangon</a></p>
                <p lang="ch" align="center"><a href="http://www.ycdc.gov.mm/content.php?yangon=Attraction" target="_blank">Yangon</a></p>
            </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <!-- end modal -->

    <!-- desktop -->
    <div class="top-bar footer top-bar-second show-for-large" align="center">
        <div class="footer-container">
            <div class="row large-up-4 second-footer">
                <div class="column">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.327923570138!2d100.49096021639426!3d13.759087656345015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd55c5a3036726e66!2sTourism+Division%3B+Culture%2C+Sports+and+Tourism+Department%3B+BMA!5e0!3m2!1sen!2sth!4v1462784638517" width="100%" height="130" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="column">
                    <p class="address">
                        Address : 17/1 Phra Athit Road,<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      Phra Nakhon, Bangkok,<br>
                         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 10200.<br>
                        Phone  &nbsp&nbsp&nbsp&nbsp: 0-2225-7612-4,<br>
                        Fax     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 0-2225-7615-6<br>
                        Email  &nbsp&nbsp&nbsp&nbsp&nbsp: service@bangkoktourist.com
                        
                    </p>
                </div>
                <div class="column">
                    <p>
                        <a href="http://map.bangkoktourist.com" target="_blank">
                            {!! HTML::image("images/logo/gis-banner.png","",array("width"=>"133","height"=>"130")) !!}
                        </a>
                    </p>
                </div>
                <div class="column">
                    <a href="https://www.facebook.com/tourismdivision" target="_blank">
                        {!! HTML::image("images/logo/footer/facebook_large.png","",array("width"=>"200px","height"=>"auto")) !!}
                    </a>
                </div>
                <!-- <div class="column">
                    <div class="fb-like-box fb_iframe_widget" data-href="https://www.facebook.com/tourismdivision" style="height: 160px" data-width="290" data-height="235" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;container_width=290&amp;header=false&amp;height=235&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftourismdivision&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=290"><span style="vertical-align: bottom; width: 290px; height: 214px;"><iframe name="f3333b5608" width="290px" height="235px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="https://www.facebook.com/v2.0/plugins/like_box.php?app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D42%23cb%3Df226a851d8%26domain%3Dwww.bangkoktourist.com%26origin%3Dhttp%253A%252F%252Fwww.bangkoktourist.com%252Ff3bbd6761c%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=290&amp;header=false&amp;height=235&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftourismdivision&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=290" style="border: none; visibility: visible; width: 300px; height: 200px; transform: scale(0.7);margin-top: -30px;" class=""></iframe></span></div>
                </div> -->
            </div>
        </div>
    </div>

    <!-- mobile -->
    <div class="top-bar footer top-bar-second hide-for-large pd-t-1 pd-b-1" align="center">
        <div class="footer-container">
            <div class="small-4 column">
                <a href="https://www.google.com/maps?ll=13.760744,100.49152&z=14&t=m&hl=en&gl=TH&mapclient=embed&cid=15374262391054429798" target="_blank">
                    {!! HTML::image("uploads/normal/footer/maps.png","",array("class"=>"")) !!}
                </a>
            </div>
            <div class="small-4 column">
                <a href="http://map.bangkoktourist.com" target="_blank">
                    {!! HTML::image("uploads/normal/footer/gis.png","",array("class"=>"")) !!}
                </a>
            </div>
            <div class="small-4 column">
                <a href="https://m.facebook.com/tourismdivision/" target="_blank">
                    {!! HTML::image("uploads/normal/footer/facebook.png","",array("class"=>"")) !!}
                </a>
            </div>
        </div>
    </div>

    <div class="top-bar footer copyright-footer" align="center">
        <div class="footer-container row">
            <div class="large-4 columns show-for-large align-left">
                <div class="third-footer">
                    <span>© 2016 by Chapter2</span>
                </div>
                <div class="third-footer">
                    <span>Proudly Created With KiwilauncherTeam</span>
                </div>
            </div>
            <div id="footer-link">
                <ul class="vertical large-horizontal menu">
                    <li class="show-for-medium"><a href="#" onclick="window.print();"><i class="fa fa-print" aria-hidden="true"></i>Print</a></li>
                    <li><a href="{!! URL::route('aboutus') !!}">About Us</a></li>
                    <li><a href="{!! URL::route('partners') !!}">Our partners</a></li>
                    <li><a href="{!! URL::route('faq') !!}">FAQ</a></li>
                    <li><a href="{!! URL::route('useful-info') !!}">Useful Info</a></li>
                    <li><a href="https://www.youtube.com/user/bangkoktourism" target="_blank">Video</a></li>
                    <li><a href="{!! URL::route('sitemap') !!}">Sitemap</a></li>
                </ul>
            </div>
        </div>
    <!--     <div class="row">
            <a href="http://pdfcrowd.com/url_to_pdf/">Save this page to a PDF</a>
        </div> -->
    </div>

    <!-- div header -->
                </div>
            </div>
        </div>
</section>
