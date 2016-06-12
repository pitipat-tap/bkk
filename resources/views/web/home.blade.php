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
                            <li id="1" lang="th" class="active clickable">January</li>
                            <li id="1" lang="en" class="active clickable">January</li>
                            <li id="1" lang="jp" class="active clickable">January</li>
                            <li id="1" lang="ch" class="active clickable">January</li>

                            <li id="2" lang="th" class="clickable">February</li>
                            <li id="2" lang="en" class="clickable">February</li>
                            <li id="2" lang="jp" class="clickable">February</li>
                            <li id="2" lang="ch" class="clickable">February</li>

                            <li id="3" lang="th" class="clickable">March</li>
                            <li id="3" lang="en" class="clickable">March</li>
                            <li id="3" lang="jp" class="clickable">March</li>
                            <li id="3" lang="ch" class="clickable">March</li>

                            <li id="4" lang="th" class="clickable">April</li>
                            <li id="4" lang="en" class="clickable">April</li>
                            <li id="4" lang="jp" class="clickable">April</li>
                            <li id="4" lang="ch" class="clickable">April</li>

                            <li id="5" lang="th" class="clickable">May</li>
                            <li id="5" lang="en" class="clickable">May</li>
                            <li id="5" lang="jp" class="clickable">May</li>
                            <li id="5" lang="ch" class="clickable">May</li>

                            <li id="6" lang="th" class="clickable">June</li>
                            <li id="6" lang="en" class="clickable">June</li>
                            <li id="6" lang="jp" class="clickable">June</li>
                            <li id="6" lang="ch" class="clickable">June</li>

                            <li id="7" lang="th" class="clickable">July</li>
                            <li id="7" lang="en" class="clickable">July</li>
                            <li id="7" lang="jp" class="clickable">July</li>
                            <li id="7" lang="ch" class="clickable">July</li>

                            <li id="8" lang="th" class="clickable">August</li>
                            <li id="8" lang="en" class="clickable">August</li>
                            <li id="8" lang="jp" class="clickable">August</li>
                            <li id="8" lang="ch" class="clickable">August</li>

                            <li id="9" lang="th" class="clickable">September</li>
                            <li id="9" lang="en" class="clickable">September</li>
                            <li id="9" lang="jp" class="clickable">September</li>
                            <li id="9" lang="ch" class="clickable">September</li>

                            <li id="10" lang="th" class="clickable">October</li>
                            <li id="10" lang="en" class="clickable">October</li>
                            <li id="10" lang="jp" class="clickable">October</li>
                            <li id="10" lang="ch" class="clickable">October</li>

                            <li id="11" lang="th" class="clickable">November</li>
                            <li id="11" lang="en" class="clickable">November</li>
                            <li id="11" lang="jp" class="clickable">November</li>
                            <li id="11" lang="ch" class="clickable">November</li>

                            <li id="12" lang="th" class="clickable">December</li>
                            <li id="12" lang="en" class="clickable">December</li>
                            <li id="12" lang="jp" class="clickable">December</li>
                            <li id="12" lang="ch" class="clickable">December</li>
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

                        @foreach($events as $index=>$event)
                        @if($event->title_thai != null)
                        <div id="detail{!! $index !!}" class="zindex1 large-6 columns">
                            <div class="event-content">
                                <h3 lang="th"> {!! $event->title_thai !!} </h3>
                                <h3 lang="en"> {!! $event->title_english !!} </h3>
                                <h3 lang="jp"> {!! $event->title_japan !!} </h3>
                                <h3 lang="ch"> {!! $event->title_china !!} </h3>
                                
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
                        @else
                            <div id="{!! $event->month !!}" class="zindex1 large-6 columns">
                                Not Found
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

@include("web.footer")
@stop



