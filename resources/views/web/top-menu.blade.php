<!-- desktop -->
<div class="top-bar show-for-large columns">
  <div id="responsive-menu">
    <div class="top-menu-container" align="left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li>
          <a class="logo" href="home">
            {!! Html::image("images/logo/bkk-logo.png","bkk-logo",array("class"=>"bkk-logo")) !!}
          </a>
        </li>
        <li>
            <a href="#">
                <span lang="th">Campaign TH</span>
                <span lang="en">Campaign EN</span>
                <span lang="jp">Campaign JP</span>
                <span lang="ch">Campaign CN</span>
            </a>
        </li>
        <li>
            <a href="attraction-category">
               <span lang="th">Attraction</span>
               <span lang="en">Attraction</span>
               <span lang="jp">Attraction</span>
               <span lang="ch">Attraction</span>
            </a>
        </li>
        <li>
            <a href="accommodation">
                <span lang="th">Accommodation</span>
                <span lang="en">Accommodation</span>
                <span lang="jp">Accommodation</span>
                <span lang="ch">Accommodation</span>
            </a>
        </li>
        <li>
            <a href="transportation">
                <span lang="th">Transportation</span>
                <span lang="en">Transportation</span>
                <span lang="jp">Transportation</span>
                <span lang="ch">Transportation</span>
            </a>
        </li>
        <li>
            <a href="gallery">
                <span lang="th">Gallery</span>
                <span lang="en">Gallery</span>
                <span lang="jp">Gallery</span>
                <span lang="ch">Gallery</span>
            </a>
        </li>
        <li>
            <a href="trips">
                <span lang="th">Trips</span>
                <span lang="en">Trips</span>
                <span lang="jp">Trips</span>
                <span lang="ch">Trips</span>
            </a>
        </li>
        <li>
            <a href="#">language</a>
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
                        ไทย
                    </a>
                  </li>
                  <li>
                    <a href="#" class="change-language" data-lan="jp">
                    <span>{!! Html::image("images/flag/japan.png","Thai",array("class"=>"lang-logo")) !!}</span>
                        ไทย
                    </a>
                  </li>
                  <li>
                    <a href="#" class="change-language" data-lan="ch">
                    <span>{!! Html::image("images/flag/China.png","Thai",array("class"=>"lang-logo")) !!}</span>
                        ไทย
                    </a>
                  </li>
            </ul>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- mobile -->
<div class="mobile-menu-button hide-for-large" data-toggle="offCanvas">
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
                    <a class="logo" href="home">
                        {!! Html::image("images/logo/bkk-logo.png","bkk-logo",array("class"=>"bkk-logo")) !!}
                    </a>
                </div>

            <!-- Menu -->
                <ul id="menu-mobile" class="vertical menu">
                    <li id="campaign">
                        <a href="#">
                            <span lang="th">Campaign TH</span>
                            <span lang="en">Campaign EN</span>
                            <span lang="jp">Campaign JP</span>
                            <span lang="ch">Campaign CN</span>
                        </a>
                    </li>
                    <li id="attraction">
                        <a href="attraction-category">
                           <span lang="th">Attraction</span>
                           <span lang="en">Attraction</span>
                           <span lang="jp">Attraction</span>
                           <span lang="ch">Attraction</span>
                        </a>
                    </li>
                    <li id="accommodation">
                        <a href="accommodation">
                            <span lang="th">Accommodation</span>
                            <span lang="en">Accommodation</span>
                            <span lang="jp">Accommodation</span>
                            <span lang="ch">Accommodation</span>
                        </a>
                    </li>
                    <li id="transportation">
                        <a href="transportation">
                            <span lang="th">Transportation</span>
                            <span lang="en">Transportation</span>
                            <span lang="jp">Transportation</span>
                            <span lang="ch">Transportation</span>
                        </a>
                    </li>
                    <li id="gallery">
                        <a href="gallery">
                            <span lang="th">Gallery</span>
                            <span lang="en">Gallery</span>
                            <span lang="jp">Gallery</span>
                            <span lang="ch">Gallery</span>
                        </a>
                    </li>
                    <li id="trips">
                        <a href="trips">
                            <span lang="th">Trips</span>
                            <span lang="en">Trips</span>
                            <span lang="jp">Trips</span>
                            <span lang="ch">Trips</span>
                        </a>
                    </li>
                </ul>
                <ul id="language-change-mobile" class="vertical menu" data-accordion-menu>
                  <li>
                    <a href="#">Language</a>
                    <ul class="menu vertical nested">
                      <li><a class="change-language" data-lan="th" href="#">ไทย</a></li>
                      <li><a class="change-language" data-lan="en" href="#">ไทย</a></li>
                      <li><a class="change-language" data-lan="jp" href="#">ไทย</a></li>
                      <li><a class="change-language" data-lan="ch" href="#">ไทย</a></li>
                    </ul>
                  </li>
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

            <a href="#" id="go-top" class="hide">Back to top</a>