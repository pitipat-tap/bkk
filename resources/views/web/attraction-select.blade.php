@extends("..layouts.head")

@section("specific_title")
 : {!! $title !!} : {!! $attractions->currentPage() !!}
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
		{!! HTML::image("uploads/normal/banner/attraction_large.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-medium-only">
		{!! HTML::image("uploads/normal/banner/attraction_large.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-small-only">
		{!! HTML::image("uploads/normal/banner/attraction_large.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
</section>

<section id="attraction-select">
    <div class="body-section">
        <div class="banner-page-title">
           <span lang="th">{!! $title !!}</span>
           <span lang="en">{!! $title !!}</span>
           <span lang="jp">{!! $title !!}</span>
           <span lang="ch">{!! $title !!}</span>
        </div>

@foreach ($attractions as $attraction)
        <div class="row mg-t-1">
            <div class="attraction-select-img-container columns medium-5 small-12 pd-l-0">
                {!! HTML::image($attraction->image_url_1,"$attraction->title_english",array("class"=>"attraction-select-img")) !!}
            </div>
            <div class="columns medium-7 small-12">
                <h4 lang="th"> {!! $attraction->title_thai !!} </h4>
                <h4 lang="en"> {!! $attraction->title_english !!} </h4>
                <h4 lang="jp"> {!! $attraction->title_japan !!} </h4>
                <h4 lang="ch"> {!! $attraction->title_china !!} </h4>
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
                        @if ($attraction->remark != null && $attraction->remark != "")
                            <tr>
                                <td><i class="fa fa-user mg-r-05" aria-hidden="true"></i></td>
                                <td>{!! $attraction->remark !!}</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="description-container">
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
                </div>
                <a href="../attraction/{!! $attraction->id !!}">
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

        <div class="pagination">{!! $attractions->links() !!}</div>
    </div>
</section>

@include("web.footer")
@stop
