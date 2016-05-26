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

@include("web.banner-picture")

<div class="banner-page-title font">Accommodation</div>
<div class="body-section border">
  <div class="row collapse ">
    1234
  </div>
</div>

@include("web.footer")
@stop



