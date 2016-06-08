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

        <div class="row mg-t-1">
            <div class="columns medium-5 small-12 pd-l-0">
                {!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"attraction-select-img")) !!}
            </div>
            <div class="columns medium-7 small-12">
                <h4 lang="th"> Lorem Ipsum </h4>
                <h4 lang="en"> Lorem Ipsum </h4>
                <h4 lang="jp"> Lorem Ipsum </h4>
                <h4 lang="ch"> Lorem Ipsum </h4>
                <p>
                     <span class="mg-r-1">
                         <i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i> 00.00-00.00
                         <i class="fa fa-money mg-l-1 mg-r-05" aria-hidden="true"></i> 500 Bth
                     </span>
                </p>
                <p lang="th">
                    In sed tincidunt lectus. Cras aliquet neque vitae mauris commodo facilisis. Donec id ullamcorper magna, quis consequat lacus. Cras non commodo diam, in mattis lorem. Aenean maximus, dui nec fringilla venenatis, nisi lacus posuere metus, quis tristique sapien dui et nunc. Integer ut ultrices est. Sed tristique ex sed vehicula ullamcorper.
                </p>
                <p lang="en">
                    In sed tincidunt lectus. Cras aliquet neque vitae mauris commodo facilisis. Donec id ullamcorper magna, quis consequat lacus. Cras non commodo diam, in mattis lorem. Aenean maximus, dui nec fringilla venenatis, nisi lacus posuere metus, quis tristique sapien dui et nunc. Integer ut ultrices est. Sed tristique ex sed vehicula ullamcorper.
                </p>
                <p lang="jp">
                    In sed tincidunt lectus. Cras aliquet neque vitae mauris commodo facilisis. Donec id ullamcorper magna, quis consequat lacus. Cras non commodo diam, in mattis lorem. Aenean maximus, dui nec fringilla venenatis, nisi lacus posuere metus, quis tristique sapien dui et nunc. Integer ut ultrices est. Sed tristique ex sed vehicula ullamcorper.
                </p>
                <p lang="cn">
                    In sed tincidunt lectus. Cras aliquet neque vitae mauris commodo facilisis. Donec id ullamcorper magna, quis consequat lacus. Cras non commodo diam, in mattis lorem. Aenean maximus, dui nec fringilla venenatis, nisi lacus posuere metus, quis tristique sapien dui et nunc. Integer ut ultrices est. Sed tristique ex sed vehicula ullamcorper.
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

        <div class="row mg-t-1">
            <div class="columns medium-5 small-12 pd-l-0">
                {!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"attraction-select-img")) !!}
            </div>
            <div class="columns medium-7 small-12">
                <h4 lang="th"> Lorem Ipsum </h4>
                <h4 lang="en"> Lorem Ipsum </h4>
                <h4 lang="jp"> Lorem Ipsum </h4>
                <h4 lang="ch"> Lorem Ipsum </h4>
                <p>
                     <span class="mg-r-1">
                         <i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i> 00.00-00.00
                         <i class="fa fa-money mg-l-1 mg-r-05" aria-hidden="true"></i> 500 Bth
                     </span>
                </p>
                <p lang="th">
                    In sed tincidunt lectus. Cras aliquet neque vitae mauris commodo facilisis. Donec id ullamcorper magna, quis consequat lacus. Cras non commodo diam, in mattis lorem. Aenean maximus, dui nec fringilla venenatis, nisi lacus posuere metus, quis tristique sapien dui et nunc. Integer ut ultrices est. Sed tristique ex sed vehicula ullamcorper.
                </p>
                <p lang="en">
                    In sed tincidunt lectus. Cras aliquet neque vitae mauris commodo facilisis. Donec id ullamcorper magna, quis consequat lacus. Cras non commodo diam, in mattis lorem. Aenean maximus, dui nec fringilla venenatis, nisi lacus posuere metus, quis tristique sapien dui et nunc. Integer ut ultrices est. Sed tristique ex sed vehicula ullamcorper.
                </p>
                <p lang="jp">
                    In sed tincidunt lectus. Cras aliquet neque vitae mauris commodo facilisis. Donec id ullamcorper magna, quis consequat lacus. Cras non commodo diam, in mattis lorem. Aenean maximus, dui nec fringilla venenatis, nisi lacus posuere metus, quis tristique sapien dui et nunc. Integer ut ultrices est. Sed tristique ex sed vehicula ullamcorper.
                </p>
                <p lang="cn">
                    In sed tincidunt lectus. Cras aliquet neque vitae mauris commodo facilisis. Donec id ullamcorper magna, quis consequat lacus. Cras non commodo diam, in mattis lorem. Aenean maximus, dui nec fringilla venenatis, nisi lacus posuere metus, quis tristique sapien dui et nunc. Integer ut ultrices est. Sed tristique ex sed vehicula ullamcorper.
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

        <div class="row mg-t-1">
            <div class="columns medium-5 small-12 pd-l-0">
                {!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"attraction-select-img")) !!}
            </div>
            <div class="columns medium-7 small-12">
                <h4 lang="th"> Lorem Ipsum </h4>
                <h4 lang="en"> Lorem Ipsum </h4>
                <h4 lang="jp"> Lorem Ipsum </h4>
                <h4 lang="ch"> Lorem Ipsum </h4>
                <p>
                     <span class="mg-r-1">
                         <i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i> 00.00-00.00
                         <i class="fa fa-money mg-l-1 mg-r-05" aria-hidden="true"></i> 500 Bth
                     </span>
                </p>
                <p lang="th">
                    In sed tincidunt lectus. Cras aliquet neque vitae mauris commodo facilisis. Donec id ullamcorper magna, quis consequat lacus. Cras non commodo diam, in mattis lorem. Aenean maximus, dui nec fringilla venenatis, nisi lacus posuere metus, quis tristique sapien dui et nunc. Integer ut ultrices est. Sed tristique ex sed vehicula ullamcorper.
                </p>
                <p lang="en">
                    In sed tincidunt lectus. Cras aliquet neque vitae mauris commodo facilisis. Donec id ullamcorper magna, quis consequat lacus. Cras non commodo diam, in mattis lorem. Aenean maximus, dui nec fringilla venenatis, nisi lacus posuere metus, quis tristique sapien dui et nunc. Integer ut ultrices est. Sed tristique ex sed vehicula ullamcorper.
                </p>
                <p lang="jp">
                    In sed tincidunt lectus. Cras aliquet neque vitae mauris commodo facilisis. Donec id ullamcorper magna, quis consequat lacus. Cras non commodo diam, in mattis lorem. Aenean maximus, dui nec fringilla venenatis, nisi lacus posuere metus, quis tristique sapien dui et nunc. Integer ut ultrices est. Sed tristique ex sed vehicula ullamcorper.
                </p>
                <p lang="cn">
                    In sed tincidunt lectus. Cras aliquet neque vitae mauris commodo facilisis. Donec id ullamcorper magna, quis consequat lacus. Cras non commodo diam, in mattis lorem. Aenean maximus, dui nec fringilla venenatis, nisi lacus posuere metus, quis tristique sapien dui et nunc. Integer ut ultrices est. Sed tristique ex sed vehicula ullamcorper.
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
