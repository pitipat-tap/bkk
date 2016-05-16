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
    $(document).ready(function(){
        sessionStorage.setItem("flag", 0);
        $('#accommodation').addClass("active");
    });
    $("#header .btn-group[role='group'] button").on('click', function(){
    $(this).siblings().removeClass('border-bottom')
    $(this).addClass('border-bottom');
})
</script>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <a>
        <img class="orbit-image" src="http://placehold.it/1500x500" alt="Space">
    </a>
</div>
<div class="banner-page-title">Accommodation</div>
<div class="body-section">
    <div class="row collapse">
    <div class="medium-12 columns">
      <ul class="tabs modify" id="example-vert-tabs" style="text-align:center"data-tabs>
        <li class="medium-3 tabs-title is-active border-right border-bottom" role="group"><a class="background-none" href="#panel1v" aria-selected="true" >Hotels</a></li>
        <li class="medium-3 tabs-title border-right" role="group"><a class="background-none" href="#panel2v">Hostels</a></li>
        <li class="medium-3 tabs-title border-right" role="group"><a class="background-none" href="#panel3v">Apartments</a></li>
        <li class="medium-3 tabs-title" role="group"><a class="background-none" href="#panel4v">Guesthouse</a></li>
      </ul>
      </div>
      <div class="medium-12 columns">
        <div class="tabs-content modify" data-tabs-content="example-vert-tabs">
          <div class="tabs-panel is-active" id="panel1v">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="tabs-panel" id="panel2v">
            <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
          </div>
          <div class="tabs-panel" id="panel3v">
            <img class="thumbnail" src="assets/img/generic/rectangle-3.jpg">
          </div>
          <div class="tabs-panel" id="panel4v">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
  </div>
</div>

@include("web.footer")
@stop



