@extends("..layouts.head")


@section("specific_css")
@stop


@section("specific_js_head")
{!! Html::script("js/verge.min.js") !!}
@stop


@section("body")

@include("web.top-menu")

<script>
    $(document).ready(function(){
        sessionStorage.setItem("flag", 0);
        $('#accommodation').addClass("active");
        $('#menu li').on('click', function(){
          $('li a.border-bottom').removeClass('border-bottom');
          $(this).find('a').addClass('border-bottom');
        });
    });
</script>




<section>
  <div class="banner-containers show-for-large">
    {!! HTML::image("uploads/normal/banner/accommodation_large.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
  </div>
  <div class="banner-containers show-for-medium-only">
    {!! HTML::image("uploads/normal/banner/accommodation_medium.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
  </div>
  <div class="banner-containers show-for-small-only">
    {!! HTML::image("uploads/normal/banner/accommodation_small.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
  </div>
</section>

<div class="banner-page-title font">Accommodation </div>
<div class="body-section" ng-controller="AccommodationController" ng-init="init()">
  <div class="row collapse">
    <div class="small-12 columns padding-b">
      <ul id="menu" class="tabs modify" id="example-vert-tabs" data-tabs>
        <li class="small-3 tabs-title is-active border-right" >
          <a class="background-none half-width border-bottom" href="#panel1v" aria-selected="true">Hotels</a>
        </li>
        <li class="small-3 tabs-title border-right" >
          <a class="background-none half-width" href="#panel2v">Hostels</a>
        </li>
        <li class="small-3 tabs-title border-right" >
          <a class="background-none half-width" href="#panel3v">Apartments</a>
        </li>
        <li class="small-3 tabs-title" >
          <a class="background-none half-width" href="#panel4v">Guesthouse</a>
        </li>
      </ul>
    </div>
    <div class="small-12 columns padding-b">
      <div class="tabs-content modify" data-tabs-content="example-vert-tabs">
          <div class="tabs-panel is-active" id="panel1v">
            <div class="row item padding-b margin-b" ng-repeat="accom in accoms">
              <div class="small-12 medium-5 columns">
                <a>
                  <img ng-src="@{{accom.image_url_1}}">
                </a>
              </div>
              <div class="small-12 medium-7 columns padding-b">
                <h4 lang="th" class="padding-b"> @{{accom.title_thai}}</h4>
                <h4 lang="en" class="padding-b"> @{{accom.title_enlish}}</h4>
                <h4 lang="ch" class="padding-b"> @{{accom.title_china}}</h4>
                <h4 lang="jp" class="padding-b"> @{{accom.title_japan}}</h4>
                <div class="padding-b">
                  <div class="small-6 medium-4 columns">
                    <i class="fa fa-clock-o" aria-hidden="true">@{{accom.opening_hours}}</i> 
                  </div>
                  <div class="small-6 medium-4 columns end">
                    <i class="fa fa-money" aria-hidden="true">@{{accom.admission_free}}</i> 
                  </div>
                </div>
                <div class="padding-b desc">
                  <span lang="th">@{{accom.description_thai}}</span>
                  <span lang="en">@{{accom.description_english}}</span>
                  <span lang="ch">@{{accom.description_china}</span>
                  <span lang="jp">@{{accom.description_japan}}</span>
                </div>
                <div  class="padding-t">
                  <a class="green-btn button"  href="accommodation/@{{accom.id}}"> 
                  Read more...</a>  
                </div>
              </div>
              <div class="padding-b">
                description
              </div>
              <div class="hide-for-print">
                <button class="green-btn" type="button">Read more...</button>
              </div>
            </div>

            <div class="padding-t hide-for-print" align="center">
              <button class="green-btn" type="button" ng-click="loadmore()">Load more...</button>
            </div>
          </div>
        <div class="tabs-panel" id="panel2v">
          <div class="row item padding-b">
            <div class="small-12 medium-5 columns">
              <a>
                <img class="orbit-image" src="http://placehold.it/500x300" alt="Space">
              </a>
            </div>
            <div class="small-12 medium-7 columns padding-b">
              <h4 class="padding-b"> Title2 </h4>
              <div class="padding-b">
                <div class="small-6 medium-4 columns">
                  <i class="fa fa-clock-o" aria-hidden="true"></i> 00.00 - 00.00
                </div>
                <div class="small-6 medium-4 columns end">
                  <i class="fa fa-money" aria-hidden="true"></i> 00.00
                </div>
              </div>
              <div class="padding-b">
                description
              </div>
              <div class="hide-for-print">
                <button class="green-btn" type="button">Read more...</button>
              </div>
            </div>
          </div>
          <div class="padding-t hide-for-print" align="center">
              <button class="green-btn" type="button">Load more...</button>
          </div>
        </div>
        <div class="tabs-panel" id="panel3v">
          <div class="row item padding-b">
            <div class="small-12 medium-5 columns">
              <a>
                <img class="orbit-image" src="http://placehold.it/500x300" alt="Space">
              </a>
            </div>
            <div class="small-12 medium-7 columns padding-b">
              <h4 class="padding-b"> Title3 </h4>
              <div class="padding-b">
                <div class="small-6 medium-4 columns">
                  <i class="fa fa-clock-o" aria-hidden="true"></i> 00.00 - 00.00
                </div>
                <div class="small-6 medium-4 columns end">
                  <i class="fa fa-money" aria-hidden="true"></i> 00.00
                </div>
              </div>
              <div class="padding-b">
                description
              </div>
              <div class="hide-for-print">
                <button class="green-btn" type="button">Read more...</button>
              </div>
            </div>
          </div>
          <div class="padding-t hide-for-print" align="center">
              <button class="green-btn" type="button">Load more...</button>
          </div>
        </div>
        <div class="tabs-panel" id="panel4v">
          <div class="row item padding-b">
            <div class="small-12 medium-5 columns">
              <a>
                <img class="orbit-image" src="http://placehold.it/500x300" alt="Space">
              </a>
            </div>
            <div class="small-12 medium-7 columns padding-b">
              <h4 class="padding-b"> Title4 </h4>
              <div class="padding-b">
                <div class="small-6 medium-4 columns">
                  <i class="fa fa-clock-o" aria-hidden="true"></i> 00.00 - 00.00
                </div>
                <div class="small-6 medium-4 columns end">
                  <i class="fa fa-money" aria-hidden="true"></i> 00.00
                </div>
              </div>
              <div class="padding-b">
                description
              </div>
              <div class="hide-for-print">
                <button class="green-btn" type="button">Read more...</button>
              </div>
            </div>
          </div>
          <div class="padding-t hide-for-print" align="center">
              <button class="green-btn" type="button">Load more...</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include("web.footer")
@stop



