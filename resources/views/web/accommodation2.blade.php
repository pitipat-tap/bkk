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
        $('#menu li').on('click', function(){
          $('li a.border-bottom').removeClass('border-bottom');
          $(this).find('a').addClass('border-bottom');
        });
    });
</script>
<section>
  <div class="banner-container show-for-large columns">
    {!! HTML::image("http://placehold.it/1500x500","bkk-logo",array("class"=>"banner-picture")) !!}
  </div>
  <div class="banner-container hide-for-large columns mg-b-1">
    {!! HTML::image("http://placehold.it/300x400","bkk-logo",array("class"=>"banner-picture")) !!}
  </div>
</section>
<div class="banner-page-title font">Accommodation</div>
<div class="body-section border">
  <div class="row collapse ">
    1234
  </div>
</div>

@include("web.footer")
@stop



