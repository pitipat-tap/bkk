@extends("..layouts.head")


@section("specific_css")
@stop


@section("specific_js_head")
{!! Html::script("js/verge.min.js") !!}
{!! Html::script("js/sly.min.js") !!}
{!! Html::script("js/home.js") !!}
@stop


@section("body")

@include("web.top-menu")

<section>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
        <ul class="orbit-container">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            <li class="is-active orbit-slide">
                <a>
                    {!! HTML::image("http://placehold.it/1500x500","",array("class"=>"orbit-image")) !!}
                    <figcaption class="orbit-caption">1</figcaption>
                </a>
            </li>
            <li class="orbit-slide">
                <a>
                    {!! HTML::image("http://placehold.it/1500x500","",array("class"=>"orbit-image")) !!}
                    <figcaption class="orbit-caption">2</figcaption>
                </a>
            </li>
            <li class="orbit-slide">
                <a>
                    {!! HTML::image("http://placehold.it/1500x500","",array("class"=>"orbit-image")) !!}
                    <figcaption class="orbit-caption">3</figcaption>
                </a>
            </li>
        </ul>
        <div class="orbit-bullets-container">
            <nav class="orbit-bullets" style="$orbit-bullet-margin-bottom: 0em">
                <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
            </nav>
        </div>
    </div>
</section>

<section id="home-body">
    <div class="body-section">
        <div class="banner-page-title show-for-medium columns">Destination</div>

        <section class="mg-b-1">
            <div class="row">
                <div class="medium-8 columns">
                      {!! HTML::image("http://placehold.it/800x600","",array("class"=>"")) !!}
                </div>
                <div class="medium-4 columns">
                    <div class="destination-highlight">
                        <h4> Wat Phra Kaew </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                            Ut malesuada molestie enim, et mattis libero vestibulum id.
                            Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                        </p>
                        {!! HTML::image("http://placehold.it/350x150","",array("class"=>"")) !!}
                        <p>
                            Vestibulum at ex convallis, viverra tortor vitae, rutrum ipsum.
                             Sed quis purus eu velit pretium euismod. 
                        </p>
                        <a>
                            <div> EXPLORE </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="campaign-attractions" >
            <div class="row">
                <div class=" medium-4 columns">
                    <div class="tag-highlight">
                        <h2> Campaign </h2>
                        <h1> ___ </h1>
                    </div>
                </div>
                <div class=" medium-8 columns">
                    {!! HTML::image("http://placehold.it/832x300","",array("class"=>"")) !!}
                </div>
            </div>
            <div class="row">
                <div class=" medium-8 columns">
                    {!! HTML::image("http://placehold.it/832x300","",array("class"=>"")) !!}
                </div>
                <div class=" medium-4 columns">
                    <div class="tag-highlight">
                        <h2> Attractions</h2>
                        <h1> ___ </h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="accommodation-events">
            <div class="row">
                <div class=" medium-4 columns">
                    <div class="tag-highlight">
                        <h2> Accommodation </h2>
                        <h1> ___ </h1>
                    </div>
                </div>
                <div class=" medium-8 columns">
                    {!! HTML::image("http://placehold.it/832x300","",array("class"=>"")) !!}
                </div>
            </div>
            <div class="row">
                <div class="events">
                    <h2> Events </h2>
                </div>
            </div>
            <div class="row">
                <div id="events-slider" class="eventsSlide">
                    <button class="backward"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                    <button class="forward"><i class="fa fa-angle-right" aria-hidden="true"></i></button>

                    <div class="frame" style="overflow: hidden;">
                        <ul >
                            <li class="active">January</li>
                            <li>February</li>
                            <li>March</li>
                            <li>April</li>
                            <li>May</li>
                            <li>June</li>
                            <li>July</li>
                            <li>August</li>
                            <li>September</li>
                            <li>October</li>
                            <li>November</li>
                            <li>December</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="events-container">
                    <div class="row">
                        <div class=" medium-6 columns">
                            <div class="event-item">
                                {!! HTML::image("http://placehold.it/550x450","",array("class"=>"")) !!}
                            </div>
                        </div>
                        <div class=" medium-6 columns">
                            <div class="event-content">
                                <h3> Songkarn </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                                    Ut malesuada molestie enim, et mattis libero vestibulum id.
                                    Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                                </p>
                                <p>
                                      <div class="medium-4 columns">
                                          <i class="fa fa-map-marker" aria-hidden="true"></i> Bangkok 
                                      </div>
                                      <div class="medium-4 columns end">
                                          <i class="fa fa-calendar" aria-hidden="true"></i> 13th 15th April 
                                      </div>
                                </p>
                                <hr>
                                <a>
                                    <div class="see-more"> see more ... </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</section>

@include("web.footer")
@stop



