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
@include("web.banner-orbit")

<section id="home-body">
    <div class="body-section">
        <div class="banner-page-title show-for-large columns">Destination</div>

        <section class="mg-b-1">
            <!-- desktop -->
            <div class="row show-for-large">
                <div class="large-8 columns">
                      {!! HTML::image("http://placehold.it/800x600","",array("class"=>"")) !!}
                </div>
                <div class="large-4 columns">
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
            <!-- mobile -->
            <div id="destination-mobile" class="row hide-for-large">
                <h2>Destination</h2>
                <form>
                    <div class="row collapse">
                        <div class="small-9 columns">
                            <input type="text" placeholder="Find your destination">
                        </div>
                        <div class="small-3 columns">
                            <a href="#" class="button postfix">Go</a>
                        </div>
                    </div>
                </form>
                <hr>
            </div>
        </section>

        <section id="campaign-attractions" >
            <div class="row">
                <div class=" large-4 columns">
                    <div class="tag-highlight">
                        <h2> Campaign </h2>
                        <h1> ___ </h1>
                    </div>
                </div>
                <div class="large-8 columns show-for-large">
                    {!! HTML::image("http://placehold.it/832x300","",array("class"=>"")) !!}
                </div>
                <div class="small-12 columns hide-for-large">
                    {!! HTML::image("http://placehold.it/400x300","",array("class"=>"")) !!}
                </div>
            </div>
            <div class="row">
                <div class="large-8 columns show-for-large">
                    {!! HTML::image("http://placehold.it/832x300","",array("class"=>"")) !!}
                </div>
                <div class="small-12 columns hide-for-large">
                    {!! HTML::image("http://placehold.it/400x300","",array("class"=>"")) !!}
                </div>
                <div class=" large-4 columns">
                    <div class="tag-highlight">
                        <h2> Attractions</h2>
                        <h1> ___ </h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="accommodation-events">
            <div class="row">
                <div class=" large-4 columns">
                    <div class="tag-highlight">
                        <h2> Accommodation </h2>
                        <h1> ___ </h1>
                    </div>
                </div>
                <div class="large-8 columns show-for-large">
                    {!! HTML::image("http://placehold.it/832x300","",array("class"=>"")) !!}
                </div>
                <div class="small-12 columns hide-for-large">
                    {!! HTML::image("http://placehold.it/400x300","",array("class"=>"")) !!}
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
                        <ul>
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
                        <div class=" large-6 columns">
                            <div class="event-item">
                                {!! HTML::image("http://placehold.it/550x450","",array("class"=>"")) !!}
                            </div>
                        </div>
                        <div class=" large-6 columns">
                            <div class="event-content">
                                <h3> Songkarn </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                                    Ut malesuada molestie enim, et mattis libero vestibulum id.
                                    Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                                </p>
                                <p>
                                    <div class="large-4 columns">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> Bangkok 
                                    </div>
                                    <div class="large-4 columns end">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> 13th 15th April 
                                    </div>
                                </p>
                                <hr>
                                <div class="">
                                    <a>
                                        <div class="see-more"> see more ... </div>
                                    </a>
                                </div>
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



