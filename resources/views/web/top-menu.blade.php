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
        <li><a class="" href="#">Campaign</a></li>
        <li><a class="" href="attraction-category">Attraction</a></li>
        <li><a id="accommodation" class="" href="accommodation">Accommodation</a></li>
        <li><a class="" href="transportation">Transportation</a></li>
        <li><a class="" href="gallery">Gallery</a></li>
        <li>
            <a class="" href="#">language</a>
             <ul class="menu">
                  <li>
                    <a href="#">
                    <span>{!! Html::image("images/flag/Thailand.png","Thai",array("class"=>"bkk-logo")) !!}</span>
                        ไทย
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    <span>{!! Html::image("images/flag/uk.png","Thai",array("class"=>"bkk-logo")) !!}</span>
                        ไทย
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    <span>{!! Html::image("images/flag/japan.png","Thai",array("class"=>"bkk-logo")) !!}</span>
                        ไทย
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    <span>{!! Html::image("images/flag/China.png","Thai",array("class"=>"bkk-logo")) !!}</span>
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
    <div class="off-canvas-wrapper">
        <div id="offCanvasInner" class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
            <div class="off-canvas position-right hide-for-large" id="offCanvas" data-off-canvas data-position="right">

                <div id="menu-logo-mobile" class="vertical menu">
                    <a class="logo" href="home">
                        {!! Html::image("images/logo/bkk-logo.png","bkk-logo",array("class"=>"bkk-logo")) !!}
                    </a>
                </div>

            <!-- Menu -->
                <ul id="menu-mobile" class="vertical menu mg-t-1">
                    <li><a href="attraction-category">Attraction</a></li>
                    <li><a href="accommodation">Accommodation</a></li>
                    <li><a href="transportation">Transportation</a></li>
                    <li><a href="gallery">Gallery</a></li>
                    <li><a>Language</a></li>
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
