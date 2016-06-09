@extends("..layouts.head")


@section("specific_css")
{!! Html::style("css/attraction-category.css") !!}
@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")

<section>
	<div class="banner-containers show-for-large">
		{!! HTML::image("http://placehold.it/1500x500","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-medium-only">
		{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-small-only">
		{!! HTML::image("http://placehold.it/300x400","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
</section>

<section id="attraction-select">
    <div class="body-section">
        <div class="banner-page-title">
           <span lang="th">Attraction</span>
           <span lang="en">Attraction</span>
           <span lang="jp">Attraction</span>
           <span lang="ch">Attraction</span>
        </div>

@foreach ($attractions as $attraction)
        <div class="row mg-t-1">
            <div class="columns medium-5 small-12 pd-l-0">
                {!! HTML::image($attraction->image_url_1,"$attraction->title_english",array("class"=>"attraction-select-img")) !!}
            </div>
            <div class="columns medium-7 small-12">
                <h4 lang="th"> {!! $attraction->title_thai !!} </h4>
                <h4 lang="en"> {!! $attraction->title_english !!} </h4>
                <h4 lang="jp"> {!! $attraction->title_japan !!} </h4>
                <h4 lang="ch"> {!! $attraction->title_china !!} </h4>
                <p>
                     <span class="mg-r-1">
                         <i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i> {!! $attraction->opening_hours !!}
                         <i class="fa fa-money mg-l-1 mg-r-05" aria-hidden="true"></i> {!! $attraction->admission_free !!}
                     </span>
                </p>
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
                <button class="green-btn mg-t-1">
                    <span lang="th">Read More...</span>
                    <span lang="en">Read More...</span>
                    <span lang="jp">Read More...</span>
                    <span lang="ch">Read More...</span>
                </button>
            </div>
            <hr class="pd-t-1">
        </div>
@endforeach

        <div align="center">
            <button class="green-btn mg-t-1 mg-b-2 medium-centered">
                <span lang="th"> Load More...</span>
                <span lang="en"> Load More...</span>
                <span lang="jp"> Load More...</span>
                <span lang="ch"> Load More...</span>
            </button>
        </div>
    </div>
</section>

@include("web.footer")
@stop
