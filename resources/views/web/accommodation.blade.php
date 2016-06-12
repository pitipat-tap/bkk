@extends("..layouts.head")

@section("specific_title")
: Accommodation : {!! $accommodations->currentPage() !!}
@stop

@section("specific_css")
{!! Html::style("css/attraction-category.css") !!}
@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")

<section>
	<div class="banner-containers show-for-large">
		{!! HTML::image("uploads/normal/banner/accommodation_large.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-medium-only">
		{!! HTML::image("uploads/normal/banner/accommodation_medium.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-small-only">
		{!! HTML::image("uploads/normal/banner/accommodation_medium.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
</section>

<section id="attraction-select">
    <div class="body-section">
        <div class="banner-page-title">
           <span lang="th">Accommodation</span>
           <span lang="en">Accommodation</span>
           <span lang="jp">Accommodation</span>
           <span lang="ch">Accommodation</span>
        </div>

@foreach ($accommodations as $accommodation)
        <div class="row mg-t-1">
            <div class="attraction-select-img-container columns medium-5 small-12 pd-l-0">
                {!! HTML::image($accommodation->image_url_1,"$accommodation->title_english",array("class"=>"attraction-select-img")) !!}
            </div>
            <div class="columns medium-7 small-12">
                <h4 lang="th"> {!! $accommodation->title_thai !!} </h4>
                <h4 lang="en"> {!! $accommodation->title_english !!} </h4>
                <h4 lang="jp"> {!! $accommodation->title_japan !!} </h4>
                <h4 lang="ch"> {!! $accommodation->title_china !!} </h4>
                <table class="info-detail">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i></td>
                            <td>{!! $accommodation->opening_hours !!}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-money mg-r-05" aria-hidden="true"></i></td>
                            <td>{!! $accommodation->admission_free !!}</td>
                        </tr>
                        @if ($accommodation->remark != null && $accommodation->remark != "")
                            <tr>
                                <td><i class="fa fa-user mg-r-05" aria-hidden="true"></i></td>
                                <td>{!! $accommodation->remark !!}</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="description-container">
                    <p lang="th">
                        {!! $accommodation->description_thai !!}
                    </p>
                    <p lang="en">
                        {!! $accommodation->description_english !!}
                    </p>
                    <p lang="jp">
                        {!! $accommodation->description_japan !!}
                    </p>
                    <p lang="ch">
                        {!! $accommodation->description_china !!}
                    </p>
                </div>
                <a href="{!! URL::route('accommodation-post',array($accommodation->id)) !!}">
                    <button class="green-btn mg-t-1">
                        <span lang="th">Read More...</span>
                        <span lang="en">Read More...</span>
                        <span lang="jp">Read More...</span>
                        <span lang="ch">Read More...</span>
                    </button>
                </a>
            </div>
            <hr class="pd-t-1">
        </div>
@endforeach

        <div class="pagination">{!! $accommodations->links() !!}</div>
    </div>
</section>

@include("web.footer")
@stop
