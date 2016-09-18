<!-- desktop -->
<div class="top-bar show-for-large columns">
  <div id="responsive-menu">
    <div class="top-menu-container" align="left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="show-for-print">
            {!! Html::image("images/logo/bkk-logo.png","bkk-logo",array("class"=>"bkk-logo")) !!}
        </li>
        <li class="hide-for-print">
          <a class="logo" href="{!! URL::route('home') !!}">
            {!! Html::image("images/logo/bkk-logo.png","bkk-logo",array("class"=>"bkk-logo")) !!}
          </a>
        </li>
        <li class="hide-for-print">
            <a href="{!! URL::route('attractionCategory') !!}">
               <span lang="th">เสน่ห์กรุงเทพฯ</span>
               <span lang="en">Attraction</span>
               <span lang="jp" style="margin:0">アトラクション</span>
               <span lang="ch">抵力</span>
            </a>
        </li>
        <li class="hide-for-print">
            <a href="{!! URL::route('accommodation') !!}">
                <span lang="th">ที่พัก</span>
                <span lang="en">Accommodation</span>
                <span lang="jp" style="margin:0">アコモデーション</span>
                <span lang="ch">住宿的</span>
            </a>
        </li>
        <li class="hide-for-print">
            <a href="{!! URL::route('transportation') !!}">
                <span lang="th">การคมนาคม</span>
                <span lang="en">Transportation</span>
                <span lang="jp" style="margin:0">交通手段</span>
                <span lang="ch">交通運輸</span>
            </a>
        </li>
        <li class="hide-for-print">
            <a href="{!! URL::route('gallery') !!}">
                <span lang="th">แกลเลอรี</span>
                <span lang="en">Gallery</span>
                <span lang="jp" style="margin:0">ギャラリー</span>
                <span lang="ch">畫廊</span>
            </a>
        </li>
        <li class="hide-for-print">
            <a href="{!! URL::route('trips') !!}">
                <span lang="th">แนะนำการท่องเที่ยว</span>
                <span lang="en">Trips</span>
                <span lang="jp" style="margin:0">トリップ</span>
                <span lang="ch">跳閘</span>
            </a>
        </li>
        <li class="hide-for-print">
            <a href="{!! URL::route('news') !!}">
                <span lang="th">ข่าว</span>
                <span lang="en">News</span>
                <span lang="jp" style="margin:0">ニュース</span>
                <span lang="ch">消息</span>
            </a>
        </li>
        <li class="hide-for-print">
            <a href="#">
                <span lang="th">{!! Html::image("images/flag/Thailand.png","Thai",array("class"=>"lang-logo")) !!} ไทย</span>
                <span lang="en">{!! Html::image("images/flag/uk.png","Thai",array("class"=>"lang-logo")) !!} English</span>
                <span lang="jp">{!! Html::image("images/flag/japan.png","Thai",array("class"=>"lang-logo")) !!} 日本語</span>
                <span lang="ch">{!! Html::image("images/flag/China.png","Thai",array("class"=>"lang-logo")) !!} 中文</span>
            </a>
             <ul class="menu">
                  <li>
                    <a href="#" class="change-language" data-lan="th">
                    <span>{!! Html::image("images/flag/Thailand.png","Thai",array("class"=>"lang-logo")) !!}</span>
                        ไทย
                    </a>
                  </li>
                  <li>
                    <a href="#" class="change-language" data-lan="en">
                    <span>{!! Html::image("images/flag/uk.png","Thai",array("class"=>"lang-logo")) !!}</span>
                        English
                    </a>
                  </li>
                  <li>
                    <a href="#" class="change-language" data-lan="jp">
                    <span>{!! Html::image("images/flag/japan.png","Thai",array("class"=>"lang-logo")) !!}</span>
                        日本語
                    </a>
                  </li>
                  <li>
                    <a href="#" class="change-language" data-lan="ch">
                    <span>{!! Html::image("images/flag/China.png","Thai",array("class"=>"lang-logo")) !!}</span>
                        中文
                    </a>
                  </li>
            </ul>
        </li>
        <li class="hide-for-print">
            <a href="{!! URL::route('search') !!}">
		<i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- mobile -->
<div class="mobile-menu-button hide-for-large hide-for-print" data-toggle="offCanvas">
    <a>
        <div id="button-menu-mobile">
            <div id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div id="cross">
                <span></span>
                <span></span>
            </div>
        </div>
    </a>
</div>

<section>
    <div class="off-canvas-wrapper" style="overflow-y: hidden">
        <div id="offCanvasInner" class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
            <div class="off-canvas position-right hide-for-large" id="offCanvas" data-off-canvas data-position="right">

                <div id="menu-logo-mobile" class="vertical menu">
                    <a class="logo" href="{!! URL::route('home') !!}">
                        {!! Html::image("images/logo/bkk-logo.png","bkk-logo",array("class"=>"bkk-logo")) !!}
                    </a>
                </div>

            <!-- Menu -->
                <ul id="menu-mobile" class="vertical menu">
                    <li id="attraction">
                        <a href="{!! URL::route('attractionCategory') !!}">
                           <span lang="th">เสน่ห์กรุงเทพฯ</span>
                           <span lang="en">Attraction</span>
                           <span lang="jp">アトラクション</span>
                           <span lang="ch">抵力</span>
                        </a>
                    </li>
                    <li id="accommodation">
                        <a href="{!! URL::route('accommodation') !!}">
                            <span lang="th">ที่พัก</span>
                            <span lang="en">Accommodation</span>
                            <span lang="jp">アコモデーション</span>
                            <span lang="ch">住宿的</span>
                        </a>
                    </li>
                    <li id="transportation">
                        <a href="{!! URL::route('transportation') !!}">
                            <span lang="th">การคมนาคม</span>
                            <span lang="en">Transportation</span>
                            <span lang="jp">交通手段</span>
                            <span lang="ch">交通運輸</span>
                        </a>
                    </li>
                    <li id="gallery">
                        <a href="{!! URL::route('gallery') !!}">
                            <span lang="th">แกลเลอรี</span>
                            <span lang="en">Gallery</span>
                            <span lang="jp">ギャラリー</span>
                            <span lang="ch">畫廊</span>
                        </a>
                    </li>
                    <li id="trips">
                        <a href="{!! URL::route('trips') !!}">
                            <span lang="th">แนะนำการท่องเที่ยว</span>
                            <span lang="en">Trips</span>
                            <span lang="jp">トリップ</span>
                            <span lang="ch">跳閘</span>
                        </a>
                    </li>
                    <li id="news">
                        <a href="{!! URL::route('news') !!}">
                            <span lang="th">ข่าว</span>
                            <span lang="en">News</span>
                            <span lang="jp">ニュース</span>
                            <span lang="ch">消息</span>
                        </a>
                    </li>
                </ul>
                <ul id="language-change-mobile" class="vertical menu" data-accordion-menu>
                  <li>
                    <a href="#">
                        <span lang="th">{!! Html::image("images/flag/Thailand.png","Thai",array("class"=>"lang-logo")) !!} ไทย</span>
                        <span lang="en">{!! Html::image("images/flag/uk.png","Thai",array("class"=>"lang-logo")) !!} English</span>
                        <span lang="jp">{!! Html::image("images/flag/japan.png","Thai",array("class"=>"lang-logo")) !!} 日本語</span>
                        <span lang="ch">{!! Html::image("images/flag/China.png","Thai",array("class"=>"lang-logo")) !!} 中文</span>
                    </a>
                    <ul class="menu vertical nested">
                      <li><a class="change-language" data-lan="th" href="#">ไทย</a></li>
                      <li><a class="change-language" data-lan="en" href="#">English</a></li>
                      <li><a class="change-language" data-lan="jp" href="#">日本語</a></li>
                      <li><a class="change-language" data-lan="ch" href="#">中文</a></li>
                    </ul>
                  </li>
                  <!--<li><a href="#" onclick="window.print();"><i class="fa fa-print" aria-hidden="true"></i>Print</a></li>-->
                </ul>

                <div id="copyright-mobile">
                    <div class="third-footer">
                        <span>© 2016 by Chapter2</span>
                    </div>
                    <div class="third-footer">
                        <span>Proudly Created With KiwilauncherTeam</span>
                    </div>
                </div>
            </div>

            <div id="offCanvasContent" class="off-canvas-content" data-off-canvas-content>
            <!-- Page content -->

            <a href="#" id="go-top" class="hide hide-for-print">Back to top</a>
