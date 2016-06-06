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
        <div class="banner-page-title show-for-large columns">
           <span lang="th" >Destination TH</span>
           <span lang="en" >Destination EN</span>
           <span lang="jp" >Destination JP</span>
           <span lang="ch" >Destination CH</span>
        </div>

        <section class="mg-b-1">
            <!-- desktop -->
            <div class="row show-for-large">
                <div class="large-8 columns">
                      {!! HTML::image("http://placehold.it/800x600","",array("class"=>"")) !!}
                </div>
                <div class="large-4 columns">
                    <div class="destination-highlight">
                        <h4 lang="th"> Wat Phra Kaew TH</h4>
                        <h4 lang="en"> Wat Phra Kaew EN</h4>
                        <h4 lang="jp"> Wat Phra Kaew JP</h4>
                        <h4 lang="ch"> Wat Phra Kaew CH</h4>
                        {!! HTML::image("http://placehold.it/350x150","",array("class"=>"")) !!}
                        <p lang="th">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                            Ut malesuada molestie enim, et mattis libero vestibulum id.
                            Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                            Vestibulum at ex convallis, viverra tortor vitae, rutrum ipsum.
                             Sed quis purus eu velit pretium euismod. 
                        </p>
                        <p lang="en">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                            Ut malesuada molestie enim, et mattis libero vestibulum id.
                            Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                            Vestibulum at ex convallis, viverra tortor vitae, rutrum ipsum.
                             Sed quis purus eu velit pretium euismod. 
                        </p>
                        <p lang="jp">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                            Ut malesuada molestie enim, et mattis libero vestibulum id.
                            Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                            Vestibulum at ex convallis, viverra tortor vitae, rutrum ipsum.
                             Sed quis purus eu velit pretium euismod. 
                        </p>
                        <p lang="ch">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                            Ut malesuada molestie enim, et mattis libero vestibulum id.
                            Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                            Vestibulum at ex convallis, viverra tortor vitae, rutrum ipsum.
                             Sed quis purus eu velit pretium euismod. 
                        </p>
                        <a class="hide-for-print">
                            <div lang="th"> EXPLORE </div>
                            <div lang="en"> EXPLORE </div>
                            <div lang="jp"> EXPLORE </div>
                            <div lang="ch"> EXPLORE </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- mobile -->
            <div id="destination-mobile" class="row hide-for-large hide-for-print">
                <h2 lang="th">Destination</h2>
                <h2 lang="en">Destination</h2>
                <h2 lang="jp">Destination</h2>
                <h2 lang="ch">Destination</h2>
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
                        <h2 lang="th"> Campaign </h2>
                        <h2 lang="en"> Campaign </h2>
                        <h2 lang="jp"> Campaign </h2>
                        <h2 lang="ch"> Campaign </h2>
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
                        <h2 lang="th"> Attractions</h2>
                        <h2 lang="en"> Attractions</h2>
                        <h2 lang="jp"> Attractions</h2>
                        <h2 lang="ch"> Attractions</h2>
                        <h1> ___ </h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="accommodation-events">
            <div class="row">
                <div class=" large-4 columns">
                    <div class="tag-highlight">
                        <h2 lang="th"> Accommodation </h2>
                        <h2 lang="en"> Accommodation </h2>
                        <h2 lang="jp"> Accommodation </h2>
                        <h2 lang="ch"> Accommodation </h2>
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
                    <h2 lang="th"> Events </h2>
                    <h2 lang="en"> Events </h2>
                    <h2 lang="jp"> Events </h2>
                    <h2 lang="ch"> Events </h2>
                </div>
            </div>
            <div class="row">
                <div id="events-slider" class="eventsSlide">
                    <button class="backward"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                    <button class="forward"><i class="fa fa-angle-right" aria-hidden="true"></i></button>

                    <div class="frame" style="overflow: hidden;">
                        <ul>
                            <li lang="th" class="active">January</li>
                            <li lang="en" class="active">January</li>
                            <li lang="jp" class="active">January</li>
                            <li lang="ch" class="active">January</li>

                            <li lang="th" >February</li>
                            <li lang="en" >February</li>
                            <li lang="jp" >February</li>
                            <li lang="ch" >February</li>

                            <li lang="th" >March</li>
                            <li lang="en" >March</li>
                            <li lang="jp" >March</li>
                            <li lang="ch" >March</li>

                            <li lang="th" >April</li>
                            <li lang="en" >April</li>
                            <li lang="jp" >April</li>
                            <li lang="ch" >April</li>

                            <li lang="th" >May</li>
                            <li lang="en" >May</li>
                            <li lang="jp" >May</li>
                            <li lang="ch" >May</li>

                            <li lang="th" >June</li>
                            <li lang="en" >June</li>
                            <li lang="jp" >June</li>
                            <li lang="ch" >June</li>

                            <li lang="th" >July</li>
                            <li lang="en" >July</li>
                            <li lang="jp" >July</li>
                            <li lang="ch" >July</li>

                            <li lang="th" >August</li>
                            <li lang="en" >August</li>
                            <li lang="jp" >August</li>
                            <li lang="ch" >August</li>

                            <li lang="th" >September</li>
                            <li lang="en" >September</li>
                            <li lang="jp" >September</li>
                            <li lang="ch" >September</li>

                            <li lang="th" >October</li>
                            <li lang="en" >October</li>
                            <li lang="jp" >October</li>
                            <li lang="ch" >October</li>

                            <li lang="th" >November</li>
                            <li lang="en" >November</li>
                            <li lang="jp" >November</li>
                            <li lang="ch" >November</li>

                            <li lang="th" >December</li>
                            <li lang="en" >December</li>
                            <li lang="jp" >December</li>
                            <li lang="ch" >December</li>
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
                                <h3 lang="th"> Songkarn </h3>
                                <h3 lang="en"> Songkarn </h3>
                                <h3 lang="jp"> Songkarn </h3>
                                <h3 lang="ch"> Songkarn </h3>
                                <p lang="th">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                                    Ut malesuada molestie enim, et mattis libero vestibulum id.
                                    Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                                </p>
                                <p lang="en">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                                    Ut malesuada molestie enim, et mattis libero vestibulum id.
                                    Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                                </p>
                                <p lang="jp">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                                    Ut malesuada molestie enim, et mattis libero vestibulum id.
                                    Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                                </p>
                                <p lang="ch">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                                    Ut malesuada molestie enim, et mattis libero vestibulum id.
                                    Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                                </p>
                                <p>
                                    <div class="large-4 columns">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span lang="th">Bangkok</span>
                                            <span lang="en">Bangkok</span>
                                            <span lang="jp">Bangkok</span>
                                            <span lang="ch">Bangkok</span>
                                    </div>
                                    <div class="large-4 columns end">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> 13th - 15th April 
                                    </div>
                                </p>
                                <hr>
                                <div class="">
                                    <a class="hide-for-print">
                                        <div class="see-more"> 
                                            <span lang="th">see more ...</span>
                                            <span lang="en">see more ...</span>
                                            <span lang="jp">see more ...</span>
                                            <span lang="ch">see more ...</span>
                                        </div>
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



