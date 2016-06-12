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
                          <div id="area-6"></div>
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
                        <h4 id="des-h-1" lang="th"> Wat Phra Kaew</h4>
                        <h4 id="des-h-2" lang="en"> Wat Phra Kaew</h4>
                        <h4 id="des-h-3" lang="jp"> Wat Phra Kaew</h4>
                        <h4 id="des-h-4" lang="ch"> Wat Phra Kaew</h4>
                        {!! HTML::image("http://placehold.it/350x150","",array("id"=>"des-img")) !!}
                        <p id="des-c-1" lang="th">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                            Ut malesuada molestie enim, et mattis libero vestibulum id.
                            Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                            Vestibulum at ex convallis, viverra tortor vitae, rutrum ipsum.
                             Sed quis purus eu velit pretium euismod. 
                        </p>
                        <p id="des-c-1" lang="en">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                            Ut malesuada molestie enim, et mattis libero vestibulum id.
                            Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                            Vestibulum at ex convallis, viverra tortor vitae, rutrum ipsum.
                             Sed quis purus eu velit pretium euismod. 
                        </p>
                        <p id="des-c-1" lang="jp">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nam dapibus lectus eget mi aliquam, ac bibendum orci dictum.
                            Ut malesuada molestie enim, et mattis libero vestibulum id.
                            Aenean eu pulvinar justo, quis mollis ligula. Nullam commodo odio a luctus blandit.
                            Vestibulum at ex convallis, viverra tortor vitae, rutrum ipsum.
                             Sed quis purus eu velit pretium euismod. 
                        </p>
                        <p id="des-c-1" lang="ch">
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
            <!-- <div id="destination-mobile" class="row hide-for-large hide-for-print">
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
            </div> -->
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
                            <li lang="th" data-month="january" class="month">January</li>
                            <li lang="en" data-month="january" class="month">January</li>
                            <li lang="jp" data-month="january" class="month">January</li>
                            <li lang="ch" data-month="january" class="month">January</li>

                            <li lang="th" data-month="febuary" class="month">February</li>
                            <li lang="en" data-month="febuary" class="month">February</li>
                            <li lang="jp" data-month="febuary" class="month">February</li>
                            <li lang="ch" data-month="febuary" class="month">February</li>

                            <li lang="th" data-month="march" class="month">March</li>
                            <li lang="en" data-month="march" class="month">March</li>
                            <li lang="jp" data-month="march" class="month">March</li>
                            <li lang="ch" data-month="march" class="month">March</li>

                            <li lang="th" data-month="april" class="month">April</li>
                            <li lang="en" data-month="april" class="month">April</li>
                            <li lang="jp" data-month="april" class="month">April</li>
                            <li lang="ch" data-month="april" class="month">April</li>

                            <li lang="th" data-month="may" class="month">May</li>
                            <li lang="en" data-month="may" class="month">May</li>
                            <li lang="jp" data-month="may" class="month">May</li>
                            <li lang="ch" data-month="may" class="month">May</li>

                            <li lang="th" data-month="june" class="month">June</li>
                            <li lang="en" data-month="june" class="month">June</li>
                            <li lang="jp" data-month="june" class="month">June</li>
                            <li lang="ch" data-month="june" class="month">June</li>

                            <li lang="th" data-month="july" class="month">July</li>
                            <li lang="en" data-month="july" class="month">July</li>
                            <li lang="jp" data-month="july" class="month">July</li>
                            <li lang="ch" data-month="july" class="month">July</li>

                            <li lang="th" data-month="august" class="month">August</li>
                            <li lang="en" data-month="august" class="month">August</li>
                            <li lang="jp" data-month="august" class="month">August</li>
                            <li lang="ch" data-month="august" class="month">August</li>

                            <li lang="th" data-month="september" class="month">September</li>
                            <li lang="en" data-month="september" class="month">September</li>
                            <li lang="jp" data-month="september" class="month">September</li>
                            <li lang="ch" data-month="september" class="month">September</li>

                            <li lang="th" data-month="october" class="month">October</li>
                            <li lang="en" data-month="october" class="month">October</li>
                            <li lang="jp" data-month="october" class="month">October</li>
                            <li lang="ch" data-month="october" class="month">October</li>

                            <li lang="th" data-month="november" class="month">November</li>
                            <li lang="en" data-month="november" class="month">November</li>
                            <li lang="jp" data-month="november" class="month">November</li>
                            <li lang="ch" data-month="november" class="month">November</li>

                            <li lang="th" data-month="december" class="month">December</li>
                            <li lang="en" data-month="december" class="month">December</li>
                            <li lang="jp" data-month="december" class="month">December</li>
                            <li lang="ch" data-month="december" class="month">December</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="events-container">
                    @foreach($events as $index=>$event)
                    @if($event->title_thai != null)
                    <div id="{!! $event->month !!}" class="event-item-list row">
                        <div class=" large-6 columns">
                            <div class="event-item">
                                {!! HTML::image($event->image_url_1,"",array("class"=>"")) !!}
                            </div>
                        </div>

                        <div  class="pos-r large-6 columns">
                            <div class="event-content">
                                <h3 lang="th"> {!! $event->title_thai !!} </h3>
                                <h3 lang="en"> {!! $event->title_english !!} </h3>
                                <h3 lang="jp"> {!! $event->title_japan !!} </h3>
                                <h3 lang="ch"> {!! $event->title_china !!} </h3>
                                
                                <p lang="th">
                                    {!! $event->description_thai !!}
                                </p>
                                <p lang="en">
                                    {!! $event->description_english !!}
                                </p>
                                <p lang="jp">
                                    {!! $event->description_japan !!}
                                </p>
                                <p lang="ch">
                                    {!! $event->description_china !!}
                                </p>
                                <p>
                                    <div class="large-4 columns end">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> {!! $event->opening_hours !!} 
                                    </div>
                                </p>
                                <hr>
                                <div class="">
                                    <a class="hide-for-print" href="{!! URL::route('attraction',array($event->id)) !!}">
                                        <div class="see-more"> 
                                            <span lang="th">see more ...</span>
                                            <span lang="en">see more ...</span>
                                            <span lang="jp">see more ...</span>
                                            <span lang="ch">see more ...</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @else
                            <div id="{!! $event->month !!}" class="large-6 columns">
                                Not Found
                            </div>
                        @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</section>

@include("web.footer")
@stop



