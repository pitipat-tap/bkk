@extends("..layouts.head")

@section("specific_title")
 : {!! $post->title !!}
@stop


@section("body")
@include("web.top-menu")

<script>
$(document).ready(function(){
    $('.news-img-frame').click(function(){
        $('.selected-img').css({'display':'block','opacity':'1'});
        $('#selected')[0].src = ($(this).children(":first")[0].src);
    });
    $('.selected-img').click(function(){
        $('.selected-img').css({'display':'none','opacity':'0'});
    });
});
</script>

<section>
	<div class="banner-containers attraction-accommodation-banner news-img-frame">
		{!! HTML::image($post->image_url_1,"bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
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
           <span>News</span>
        </div>

        <div class="news-border mg-b-2 pd-b-2">
            <div class="row mg-t-1">
                <div class="columns medium-12 small-12 pd-l-0 pd-r-0">
                    <h3 lang="th"> {!! $post->title_thai !!} </h3>
                    <h3 lang="en"> {!! $post->title_english !!} </h3>
                    <hr>
                    <div class="columns medium-8 small-12 pd-l-0">
                        <div lang="th">{!! $post->description_thai !!}</div>
                        <div lang="en">{!! $post->description_english !!}</div>
                    </div>
                    <div class="columns medium-4 small-12">
                        <div class="news-img-container row small-up-2">
                            @if ($post->image_url_2 != null && $post->image_url_2 != "")
                            <div class="column news-img-frame">
                                {!! HTML::image($post->image_url_2,"",array("class"=>"news-tag-img")) !!}
                            </div>
                            @endif
                            @if ($post->image_url_3 != null && $post->image_url_3 != "")
                            <div class="column news-img-frame">
                                {!! HTML::image($post->image_url_3,"",array("class"=>"news-tag-img")) !!}
                            </div>
                            @endif
                            @if ($post->image_url_4 != null && $post->image_url_4 != "")
                            <div class="column news-img-frame">
                                {!! HTML::image($post->image_url_4,"",array("class"=>"news-tag-img")) !!}
                            </div>
                            @endif
                            @if ($post->image_url_5 != null && $post->image_url_5 != "")
                            <div class="column news-img-frame">
                                {!! HTML::image($post->image_url_5,"",array("class"=>"news-tag-img")) !!}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include("web.footer")
@stop
