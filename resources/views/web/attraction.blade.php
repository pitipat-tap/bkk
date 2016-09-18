@extends("..layouts.head")

@section("specific_title")
 : {!! $attraction->title_english !!}
@stop

@section("specific_meta")
<meta property="og:url" content="http://www.bangkoktourist.com/attraction/{!! $attraction->id!!}" >
<meta property="og:title" content="Bangkok Smiles : {!! $attraction->title_english !!}" >
<meta property="og:description" content="{!! $attraction->description_thai !!}" >
<meta property="og:image" content="{!! $attraction->image_url_1 !!}" >
<meta property="og:image:type" content="image/jpeg" >
<meta property="og:image:width" content="400" >
<meta property="og:image:height" content="300" >
<meta property="og:site_name" content="bangkoktourist" >
<meta property="og:locale" content="th_TH" >
@stop

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
                        <table class="info-detail">
                            <tbody>
                                <tr>
                                    <td><i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i></td>
                                    <td>{!! $attraction->opening_hours !!}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-money mg-r-05" aria-hidden="true"></i></td>
                                    <td>{!! $attraction->admission_free !!}</td>
                                </tr>
                                @if ($attraction->telephone_number!= null && $attraction->telephone_number!= "")
                                    <tr>
                                        <td><i class="fa fa-phone mg-r-05" aria-hidden="true"></i></td>
                                        <td>{!! $attraction->telephone_number!!}</td>
                                    </tr>
                                @endif
                                @if ($attraction->website!= null && $attraction->website!= "")
                                    <tr>
                                        <td><i class="fa fa-globe mg-r-05" aria-hidden="true"></i></td>
                                        <td>{!! $attraction->website!!}</td>
                                    </tr>
                                @endif
                                @if ($attraction->address!= null && $attraction->address!= "")
                                    <tr>
                                        <td><i class="fa fa-map-marker mg-r-05" aria-hidden="true"></i></td>
                                        <td>{!! $attraction->address!!}</td>
                                    </tr>
                                @endif
                                @if ($attraction->commute!= null && $attraction->commute!= "")
                                    <tr>
                                        <td><i class="fa fa-bus mg-r-05" aria-hidden="true"></i></td>
                                        <td>{!! $attraction->commute!!}</td>
                                    </tr>
                                @endif
                                @if ($attraction->remark != null && $attraction->remark != "")
                                    <tr>
                                        <td><i class="fa fa-commenting-o mg-r-05" aria-hidden="true"></i></td>
                                        <td>{!! $attraction->remark !!}</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
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
                        <table class="info-detail">
                            <tbody>
                                <tr>
                                    <td><i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i></td>
                                    <td>{!! $attraction->opening_hours !!}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-money mg-r-05" aria-hidden="true"></i></td>
                                    <td>{!! $attraction->admission_free !!}</td>
                                </tr>
                                @if ($attraction->telephone_number!= null && $attraction->telephone_number!= "")
                                    <tr>
                                        <td><i class="fa fa-phone mg-r-05" aria-hidden="true"></i></td>
                                        <td>{!! $attraction->telephone_number!!}</td>
                                    </tr>
                                @endif
                                @if ($attraction->website!= null && $attraction->website!= "")
                                    <tr>
                                        <td><i class="fa fa-globe mg-r-05" aria-hidden="true"></i></td>
                                        <td>{!! $attraction->website!!}</td>
                                    </tr>
                                @endif
                                @if ($attraction->address!= null && $attraction->address!= "")
                                    <tr>
                                        <td><i class="fa fa-map-marker mg-r-05" aria-hidden="true"></i></td>
                                        <td>{!! $attraction->address!!}</td>
                                    </tr>
                                @endif
                                @if ($attraction->commute!= null && $attraction->commute!= "")
                                    <tr>
                                        <td><i class="fa fa-bus mg-r-05" aria-hidden="true"></i></td>
                                        <td>{!! $attraction->commute!!}</td>
                                    </tr>
                                @endif
                                @if ($attraction->remark != null && $attraction->remark != "")
                                    <tr>
                                        <td><i class="fa fa-commenting-o mg-r-05" aria-hidden="true"></i></td>
                                        <td>{!! $attraction->remark !!}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <td colspan="2" align="center">
                                        <div class="fb-share-button" 
                                            data-href="http://www.your-domain.com/your-page.html" 
                                            data-layout="box_count">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="attraction-img-container row small-up-2 mg-t-1">
                        @if ($attraction->image_url_2 != null && $attraction->image_url_2 != "")
                        <div class="column attraction-img-frame">
                            {!! HTML::image($attraction->image_url_2,"",array("class"=>"attraction-tag-img")) !!}
                        </div>
                        @endif
                        @if ($attraction->image_url_3 != null && $attraction->image_url_3 != "")
                        <div class="column attraction-img-frame">
                            {!! HTML::image($attraction->image_url_3,"",array("class"=>"attraction-tag-img")) !!}
                        </div>
                        @endif
                        @if ($attraction->image_url_4 != null && $attraction->image_url_4 != "")
                        <div class="column attraction-img-frame">
                            {!! HTML::image($attraction->image_url_4,"",array("class"=>"attraction-tag-img")) !!}
                        </div>
                        @endif
                        @if ($attraction->image_url_5 != null && $attraction->image_url_5 != "")
                        <div class="column attraction-img-frame">
                            {!! HTML::image($attraction->image_url_5,"",array("class"=>"attraction-tag-img")) !!}
                        </div>
                        @endif
                    </div>
                    <h3 class="show-for-small-only map"> Map </h3>
                    <div align="center" class="show-for-small-only hide-for-print">
                        <iframe src="{!! $attraction->map_url !!}" align=center" frameborder="0" class="iframe-size " style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@include("web.footer")
@stop
