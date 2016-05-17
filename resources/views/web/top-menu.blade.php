<!-- desitop -->
<div class="top-bar show-for-medium columns">
  <div id="responsive-menu">
    <div class="top-menu-container" align="left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li>
          <a class="logo" href="home">
            {!! Html::image("images/logo/bkk-logo.png","bkk-logo",array("class"=>"bkk-logo")) !!}
          </a>
        </li>
        <li><a class="active" href="#">Campaign</a></li>
        <li><a class="" href="#">Attraction</a></li>
        <li><a class="" href="#">Accommodation</a></li>
        <li><a class="" href="transportation">Transportation</a></li>
        <li><a class="" href="#">Gallery</a></li>
        <li><a class="" href="#">language</a></li>
      </ul>
    </div>
  </div>
</div>

<!-- mobile -->
<div class="mobile-menu-button show-for-small-only" data-toggle="offCanvas">
    <a>
        <div id="menu-toggle">
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
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
            <div class="off-canvas position-right" id="offCanvas" data-off-canvas data-position="right">

                <div class="vertical menu">
                    <a class="logo" href="home">
                        {!! Html::image("images/logo/bkk-logo.png","bkk-logo",array("class"=>"bkk-logo")) !!}
                    </a>
                </div>

            <!-- Menu -->
                <ul class="vertical menu">
                    <li><a href="#">Attraction</a></li>
                    <li><a href="#">Accommodation</a></li>
                    <li><a href="transportation">Transportation</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>

                <ul class="vertical menu">
                    <li><a>Language</a></li>
                </ul>

            </div>

            <div class="off-canvas-content" data-off-canvas-content>
            <!-- Page content -->
