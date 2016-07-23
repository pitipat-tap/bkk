@extends("..layouts.head")

@section("specific_title")
 : News
@stop

@section("specific_css")
{!! Html::style("css/attraction-category.css") !!}
@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")

<!--<section>
	<div class="banner-containers show-for-large">
		{!! HTML::image("uploads/normal/banner/attraction_large.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-medium-only">
		{!! HTML::image("uploads/normal/banner/attraction_medium.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-small-only">
		{!! HTML::image("uploads/normal/banner/attraction_small.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
</section>-->

<section id="attraction-select">
    <div class="body-section">
        <div class="banner-page-title">
            <span lang="th">ข่าว</span>
            <span lang="en">News</span>
            <span lang="jp">ニュース</span>
            <span lang="ch">消息</span>
        </div>

@foreach ($posts as $post)
        <div class="row mg-t-1">
            <div class="attraction-select-img-container columns medium-5 small-12 pd-l-0">
                {!! HTML::image($post->image_url_1,"$post->title",array("class"=>"attraction-select-img")) !!}
            </div>
            <div class="columns medium-7 small-12">
                <h4 lang="th"> {!! $post->title_thai !!} </h4>
                <h4 lang="en"> {!! $post->title_english !!} </h4>
                <div class="description-container">
                    <p lang="th">{!! $post->description_thai !!}</p>
                    <p lang="en">{!! $post->description_english !!}</p>
                </div>
                <a href="{!! URL::route('blog-post',array($post->url)) !!}">
                    <button class="green-btn mg-t-1">
                        <span>Read More...</span>
                    </button>
                </a>
            </div>
            <hr class="pd-t-1">
        </div>
@endforeach

        <div class="pagination">{!! $posts->links() !!}</div>
    </div>
</section>

@include("web.footer")
@stop
