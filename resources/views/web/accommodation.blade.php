@extends("..layouts.head")


@section("specific_css")
{!! Html::style("css/accommodation.css") !!}
@stop


@section("specific_js_head")
{!! Html::script("js/verge.min.js") !!}
@stop


@section("body")

@include("web.top-menu")

<script>
//     $(document).ready(function(){
//         sessionStorage.setItem("flag", 0);
//         $('#accommodation').addClass("active");
//         $('#menu li').on('click', function(){
//           $('li a.border-bottom').removeClass('border-bottom');
//           $(this).find('a').addClass('border-bottom');
//         });
//     });
</script>

<section>
  <div class="banner-containers show-for-large">
    {!! HTML::image("http://placehold.it/1500x500","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
  </div>
  <div class="banner-containers show-for-medium-only">
    {!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
  </div>
  <div class="banner-containers show-for-small-only">
    {!! HTML::image("http://placehold.it/300x400","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
  </div>
</section>

<div class="banner-page-title font">Accommodation</div>
<div class="body-section">
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
          <div class="row item padding-b">
            <div class="small-12 medium-5 columns">
              <a>
                <img class="orbit-image" src="http://placehold.it/500x300" alt="Space">
              </a>
            </div>
            <div class="small-12 medium-7 columns padding-b">
              <h4 class="padding-b"> Title1 </h4>
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



