@extends("..layouts.head")

@section("specific_title")
 : {!! $post->title !!}
@stop


@section("body")
@include("web.top-menu")

<section>
	<div class="banner-containers attraction-accommodation-banner attraction-img-frame">
		{!! HTML::image($post->feature_image_url,"bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
</section>

<section id="news-post">

    <div class="selected-img">
        <div class="selected-frame" align="center">
            <img id="selected" src="">
        </div>
    </div>

    <div class="body-section">
        <div class="banner-page-title hide-for-small-only">
           <span lang="th">News</span>
           <span lang="en">News</span>
           <span lang="jp">News</span>
           <span lang="ch">News</span>
        </div>

        <div class="news-border mg-b-2 pd-b-2">
            <div class="row mg-t-1">
                <div class="columns medium-12 small-12 pd-l-0">
                    <h3 lang="th"> {!! $post->title !!} </h3>
                    <hr>
                        {!! $post->content !!}
                </div>
            </div>
        </div>

    </div>
</section>

@include("web.footer")
@stop
