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

<section id="attraction">
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
                    <h3> Lorem Ipsum </h3>
                    <div class="attraction-tag-container show-for-small-only">
                        <h5>Info</h5>
                        <hr>
                        <p>
                            <i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i> 00.00 - 00.00
                        </p>
                        <p>
                            <i class="fa fa-money mg-r-05" aria-hidden="true"></i> 00.00 - 00.00
                        </p>
                        <p>
                            <i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i> 00.00 - 00.00
                        </p>
                    </div>
                    <h5 class="description mg-t-1 pd-l-1 show-for-small-only">Description</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus arcu, rutrum sit amet interdum in, dignissim in velit. Sed iaculis porta ultricies. Vestibulum maximus lectus vel ex tincidunt volutpat. Vivamus suscipit diam lectus, sit amet volutpat est lacinia quis. Aliquam purus odio, eleifend eu euismod in, finibus eget odio. Vivamus in neque erat. Suspendisse bibendum ligula sed vehicula finibus.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus arcu, rutrum sit amet interdum in, dignissim in velit. Sed iaculis porta ultricies. Vestibulum maximus lectus vel ex tincidunt volutpat. Vivamus suscipit diam lectus, sit amet volutpat est lacinia quis. Aliquam purus odio, eleifend eu euismod in, finibus eget odio. Vivamus in neque erat. Suspendisse bibendum ligula sed vehicula finibus.
                    </p>
                    <div align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.2273550492437!2d100.61505971475148!3d14.063747593777306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ded58d05cc4e27%3A0xef5e8da181d96f2f!2sPhahonyothin+Rd%2C+Tambon+Khlong+Nung%2C+Amphoe+Khlong+Luang%2C+Chang+Wat+Pathum+Thani+12120!5e0!3m2!1sen!2sth!4v1465457109938" align=center" frameborder="0" class="iframe-size show-for-medium" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="columns medium-4 small-12 pd-l-0">
                    <div class="attraction-tag-container hide-for-small-only">
                        <h5> Lorem Ipsum</h5>
                        <hr>
                        <p>
                            <i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i> 00.00 - 00.00
                        </p>
                        <p>
                            <i class="fa fa-money mg-r-05" aria-hidden="true"></i> 00.00 - 00.00
                        </p>
                        <p>
                            <i class="fa fa-clock-o mg-r-05" aria-hidden="true"></i> 00.00 - 00.00
                        </p>
                    </div>
                    <div class="attraction-img-container row small-up-2 mg-t-1">
                        <div class="column">
                            {!! HTML::image("http://placehold.it/500x500","",array("class"=>"attraction-tag-img")) !!}
                        </div>
                        <div class="column">
                            {!! HTML::image("http://placehold.it/500x500","",array("class"=>"attraction-tag-img")) !!}
                        </div>
                        <div class="column">
                            {!! HTML::image("http://placehold.it/500x500","",array("class"=>"attraction-tag-img")) !!}
                        </div>
                    </div>
                    <h3 class="show-for-small-only map"> Map </h3>
                    <div align="center" class="show-for-small-only">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.2273550492437!2d100.61505971475148!3d14.063747593777306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ded58d05cc4e27%3A0xef5e8da181d96f2f!2sPhahonyothin+Rd%2C+Tambon+Khlong+Nung%2C+Amphoe+Khlong+Luang%2C+Chang+Wat+Pathum+Thani+12120!5e0!3m2!1sen!2sth!4v1465457109938" align=center" frameborder="0" class="iframe-size " style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@include("web.footer")
@stop
