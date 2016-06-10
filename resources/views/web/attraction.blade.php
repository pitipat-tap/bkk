@extends("..layouts.head")


@section("specific_css")
{!! Html::style("css/attraction-category.css") !!}
@stop


@section("specific_js_head")

@stop


@section("body")

<script>
$(document).ready(function(){
    $('.attraction-img-frame').click(function(){
        $('.selected-img').css({'display':'block','opacity':'1'});
        $('#selected')[0].src = ($(this).children(":first")[0].src);
    });
    $('.selected-img').click(function(){
        $('.selected-img').css({'display':'none','opacity':'0'});
    });
});
</script>
@include("web.top-menu")

<section>
	<div class="banner-containers attraction-accommodation-banner attraction-img-frame">
		{!! HTML::image($attraction->image_url_1,"bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
</section>

<section id="attraction">
    <div class="selected-img">
        <div class="selected-frame" align="center">
            <img id="selected" src="">
        </div>
    </div>
    <div class="body-section">
        <div class="banner-page-title hide-for-small-only">
           <span lang="th">Attraction</span>
           <span lang="en">Attraction</span>
           <span lang="jp">Attraction</span>
           <span lang="ch">Attraction</span>
        </div>

        <div class="attraction-border mg-b-2 pd-b-2">
            <div class="row mg-t-1">
                <div class="columns medium-8 small-12 pd-l-0">
                    <h3 lang="th"> {!! $attraction->title_thai !!} </h3>
                    <h3 lang="en"> {!! $attraction->title_english !!} </h3>
                    <h3 lang="jp"> {!! $attraction->title_japan !!} </h3>
                    <h3 lang="ch"> {!! $attraction->title_china !!} </h3>
                    <div class="attraction-tag-container show-for-small-only">
                        <h5>Info</h5>
                        <hr>
                        <p>
                            <i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i> {!! $attraction->opening_hours !!}
                        </p>
                        <p>
                            <i class="fa fa-money mg-r-05" aria-hidden="true"></i> {!! $attraction->admission_free !!}
                        </p>
                        @if ($attraction->remark != null && $attraction->remark != "")
                            <p>
                                <i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i> {!! $attraction->remark !!}
                            </p>
                        @endif
                    </div>
                    <h5 class="description mg-t-1 pd-l-1 show-for-small-only">Description</h5>
                    <p lang="th">
                        {!! $attraction->description_thai !!}
                    </p>
                    <p lang="en">
                        {!! $attraction->description_english !!}
                    </p>
                    <p lang="jp">
                        {!! $attraction->description_japan !!}
                    </p>
                    <p lang="ch">
                        {!! $attraction->description_china !!}
                    </p>
                    <div align="center">
                        <iframe src="{!! $attraction->map_url !!}" align=center" frameborder="0" class="iframe-size show-for-medium" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="columns medium-4 small-12 pd-l-0">
                    <div class="attraction-tag-container hide-for-small-only">
                        <h5 lang="th"> {!! $attraction->title_thai !!} </h5>
                        <h5 lang="en"> {!! $attraction->title_english !!} </h5>
                        <h5 lang="jp"> {!! $attraction->title_japan !!} </h5>
                        <h5 lang="ch"> {!! $attraction->title_china !!} </h5>
                        <hr>
                        <p>
                            <i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i> {!! $attraction->opening_hours !!}
                        </p>
                        <p>
                            <i class="fa fa-money mg-r-05" aria-hidden="true"></i> {!! $attraction->admission_free !!}
                        </p>
                        @if ($attraction->remark != null && $attraction->remark != "")
                            <p>
                                <i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i> {!! $attraction->remark !!}
                            </p>
                        @endif
                    </div>
                    <div class="attraction-img-container row small-up-2 mg-t-1">
                        <div class="column attraction-img-frame">
                            {!! HTML::image($attraction->image_url_2,"",array("class"=>"attraction-tag-img")) !!}
                        </div>
                        <div class="column attraction-img-frame">
                            {!! HTML::image($attraction->image_url_3,"",array("class"=>"attraction-tag-img")) !!}
                        </div>
                        <div class="column attraction-img-frame">
                            {!! HTML::image($attraction->image_url_4,"",array("class"=>"attraction-tag-img")) !!}
                        </div>
                        <div class="column attraction-img-frame">
                            {!! HTML::image($attraction->image_url_5,"",array("class"=>"attraction-tag-img")) !!}
                        </div>
                    </div>
                    <h3 class="show-for-small-only map"> Map </h3>
                    <div align="center" class="show-for-small-only">
                        <iframe src="{!! $attraction->map_url !!}" align=center" frameborder="0" class="iframe-size " style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@include("web.footer")
@stop
