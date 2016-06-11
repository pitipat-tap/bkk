@extends("..layouts.head")


@section("specific_css")
@stop


@section("specific_js_head")
{!! Html::script("js/verge.min.js") !!}
{!! Html::script("js/sly.min.js") !!}
{!! Html::script("js/home.js") !!}
@stop


@section("body")

<script>
$(document).ready(function(){
    $('#area-1').hover(
        function(){
            $('#zone-1').css("z-index",3);
        },
        function(){
            $('#zone-1').css("z-index",1);
        }
    );
    $('#area-2').hover(
        function(){
            $('#zone-2').css("z-index",3);
        },
        function(){
            $('#zone-2').css("z-index",1);
        }
    );
    $('#area-3').hover(
        function(){
            $('#zone-3').css("z-index",3);
        },
        function(){
            $('#zone-3').css("z-index",1);
        }
    );
    $('#area-4').hover(
        function(){
            $('#zone-4').css("z-index",3);
        },
        function(){
            $('#zone-4').css("z-index",1);
        }
    );
    $('#area-5').hover(
        function(){
            $('#zone-5').css("z-index",3);
        },
        function(){
            $('#zone-5').css("z-index",1);
        }
    );
});
</script>
@include("web.top-menu")

@include("web.banner-orbit")

<section id="home-body">
    <div class="body-section">
        <div class="banner-page-title show-for-large columns">
           <span lang="th" >Destination</span>
           <span lang="en" >Destination</span>
           <span lang="jp" >Destination</span>
           <span lang="ch" >Destination</span>
        </div>

        <section class="mg-b-1">
            <!-- desktop -->
            <div class="row show-for-large">
                <div class="large-8 columns maps-container">
                        
                      <div class="map-group">
                          <div id="area-1"></div>
                          <div id="area-2"></div>
                          <div id="area-3"></div>
                          <div id="area-4"></div>
                          <div id="area-5"></div>
                          {!! HTML::image("images/maps/map-0.png","",array("style"=>"z-index:2")) !!}
                          {!! HTML::image("images/maps/map-01.png","",array("id"=>"zone-1")) !!}
                          {!! HTML::image("images/maps/map-02.png","",array("id"=>"zone-2")) !!}
                          {!! HTML::image("images/maps/map-03.png","",array("id"=>"zone-3")) !!}
                          {!! HTML::image("images/maps/map-04.png","",array("id"=>"zone-4")) !!}
                          {!! HTML::image("images/maps/map-05.png","",array("id"=>"zone-5")) !!}
                      </div>
                </div>
                <div class="large-4 columns">
                    <div class="destination-highlight">
                        <h4 lang="th"> Wat Phra Kaew</h4>
                        <h4 lang="en"> Wat Phra Kaew</h4>
                        <h4 lang="jp"> Wat Phra Kaew</h4>
                        <h4 lang="ch"> Wat Phra Kaew</h4>
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
                <a href="{!! URL::route('transportation') !!}">
                    <div class=" large-4 columns">
                        <div class="tag-highlight">
                            <h2 lang="th"> Transportation </h2>
                            <h2 lang="en"> Transportation </h2>
                            <h2 lang="jp"> Transportation </h2>
                            <h2 lang="ch"> Transportation </h2>
                            <h1> ___ </h1>
                        </div>
                    </div>
                    <div class="large-8 columns show-for-large">
                        {!! HTML::image("uploads/normal/home/transportation_large.jpg","",array("class"=>"")) !!}
                    </div>
                    <div class="small-12 columns hide-for-large">
                        {!! HTML::image("uploads/normal/home/transportation_medium.jpg","",array("class"=>"")) !!}
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="{!! URL::route('attractionCategory') !!}">
                    <div class="large-8 columns show-for-large">
                        {!! HTML::image("uploads/normal/home/attraction_large.jpg","",array("class"=>"")) !!}
                    </div>
                    <div class="small-12 columns hide-for-large">
                        {!! HTML::image("uploads/normal/home/attraction_medium.jpg","",array("class"=>"")) !!}
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
                </a>
            </div>
        </section>

        <section id="accommodation-events">
            <div id="accommodation" class="row">
                <a href="{!! URL::route('accommodation') !!}">
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
                        {!! HTML::image("uploads/normal/home/accommodation_large.jpg","",array("class"=>"")) !!}
                    </div>
                    <div class="small-12 columns hide-for-large">
                        {!! HTML::image("uploads/normal/home/accommodation_medium.jpg","",array("class"=>"")) !!}
                    </div>
                </a>
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



