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
		{!! HTML::image("uploads/normal/banner/attraction_large.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-medium-only">
		{!! HTML::image("uploads/normal/banner/attraction_medium.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
	<div class="banner-containers show-for-small-only">
		{!! HTML::image("uploads/normal/banner/attraction_small.jpg","bkk-logo",array("class"=>"banner-picture", "id"=>"banner-img")) !!}
	</div>
</section>

<div class="body-section">
    <div class="banner-page-title">
       <span lang="th">Attraction</span>
       <span lang="en">Attraction</span>
       <span lang="jp">Attraction</span>
       <span lang="ch">Attraction</span>
    </div>
	<div id="category-container-1" class="category-container">
        <a href="{!! URL::route('attractionSelect',array('arts_and_culture')) !!}">
			<div class="category-picture show-for-large">
				{!! HTML::image("uploads/normal/attraction_category/art_large.jpg","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-picture hide-for-large">
				{!! HTML::image("uploads/normal/attraction_category/art_medium.jpg","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-description">
				<h3 lang="th">ARTS AND CULTURE</h3>
				<h3 lang="en">ARTS AND CULTURE</h3>
				<h3 lang="jp">ARTS AND CULTURE</h3>
				<h3 lang="ch">ARTS AND CULTURE</h3>
				<br class="show-for-large">
				<h5 lang="th" class="show-for-large">
					View Bangkok in an exquisite ways. Antique arts and heart-warming culture that will redefine your experiences in Bangkok.
				</h5>
				<h5 lang="en" class="show-for-large">
					View Bangkok in an exquisite ways. Antique arts and heart-warming culture that will redefine your experiences in Bangkok.
				</h5>
				<h5 lang="jp" class="show-for-large">
					View Bangkok in an exquisite ways. Antique arts and heart-warming culture that will redefine your experiences in Bangkok.
				</h5>
				<h5 lang="ch" class="show-for-large">
					View Bangkok in an exquisite ways. Antique arts and heart-warming culture that will redefine your experiences in Bangkok.
				</h5>
			</div>
		</a>
	</div>
	<div>
		<div id="category-container-2" class="category-container">
            <a href="{!! URL::route('attractionSelect',array('food_and_drink')) !!}">
				<div class="category-picture show-for-large">
					{!! HTML::image("uploads/normal/attraction_category/food_large.jpg","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="category-picture hide-for-large">
					{!! HTML::image("uploads/normal/attraction_category/food_medium.jpg","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="category-description">
					<h3 lang="th">FOOD AND DRINK</h3>
					<h3 lang="en">FOOD AND DRINK</h3>
					<h3 lang="jp">FOOD AND DRINK</h3>
					<h3 lang="ch">FOOD AND DRINK</h3>
				</div>
			</a>
		</div>
		<div id="category-container-3" class="category-container">
			<a href="attraction-select/parks_and_gardens">
        <a href="{!! URL::route('attractionSelect',array('arts_and_culture')) !!}">
				<div class="category-picture show-for-large">
					{!! HTML::image("uploads/normal/attraction_category/park_large.jpg","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="category-picture hide-for-large">
					{!! HTML::image("uploads/normal/attraction_category/park_medium.jpg","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="category-description">
					<h3 lang="th">PARKS AND GARDENS</h3>
					<h3 lang="en">PARKS AND GARDENS</h3>
					<h3 lang="jp">PARKS AND GARDENS</h3>
					<h3 lang="ch">PARKS AND GARDENS</h3>
				</div>
			</a>
		</div>
	</div>
	<div id="category-container-4" class="category-container">
            <a href="{!! URL::route('attractionSelect',array('events')) !!}">
			<div class="category-picture show-for-large">
				{!! HTML::image("uploads/normal/attraction_category/event_large.jpg","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-picture hide-for-large">
				{!! HTML::image("uploads/normal/attraction_category/event_medium.jpg","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-description">
                <h3 lang="th">Events</h3>
                <h3 lang="en">Events</h3>
                <h3 lang="jp">Events</h3>
                <h3 lang="ch">Events</h3>

				<br class="show-for-large">
				<h5 lang="th" class="show-for-large">
					Don't miss our dazzling event hosted in Bangkok. Save the date, and be ready for the upcoming event that you won't forget.
				</h5>
				<h5 lang="en" class="show-for-large">
					Don't miss our dazzling event hosted in Bangkok. Save the date, and be ready for the upcoming event that you won't forget.
				</h5>
				<h5 lang="jp" class="show-for-large">
					Don't miss our dazzling event hosted in Bangkok. Save the date, and be ready for the upcoming event that you won't forget.
				</h5>
				<h5 lang="ch" class="show-for-large">
					Don't miss our dazzling event hosted in Bangkok. Save the date, and be ready for the upcoming event that you won't forget.
				</h5>
			</div>
		</a>
	</div>
	<div id="category-container-5" class="category-container">
            <a href="{!! URL::route('attractionSelect',array('shopping')) !!}">
			<div class="category-picture show-for-large">
				{!! HTML::image("uploads/normal/attraction_category/shopping_large.jpg","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-picture hide-for-large">
				{!! HTML::image("uploads/normal/attraction_category/shopping_medium.jpg","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-description">
				<h3 lang="th">Shopping</h3>
				<h3 lang="en">Shopping</h3>
				<h3 lang="jp">Shopping</h3>
				<h3 lang="ch">Shopping</h3>
				<h5 lang="th" class="show-for-large">
					Enjoy Bangkok's most recommended shopping place, or try our street foods that we're very proud of.
				</h5>
				<h5 lang="en" class="show-for-large">
					Enjoy Bangkok's most recommended shopping place, or try our street foods that we're very proud of.
				</h5>
				<h5 lang="jp" class="show-for-large">
					Enjoy Bangkok's most recommended shopping place, or try our street foods that we're very proud of.
				</h5>
				<h5 lang="ch" class="show-for-large">
					Enjoy Bangkok's most recommended shopping place, or try our street foods that we're very proud of.
				</h5>
			</div>
		</a>
	</div>
</div>

@include("web.footer")
@stop
