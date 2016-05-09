@extends("..layouts.head")


@section("specific_css")

@stop


@section("specific_js_head")
{!! Html::script("js/verge.min.js") !!}
@stop


@section("body")

@include("web.top-menu")

<h1> BKK </h1>

@include("web.footer")
@stop



