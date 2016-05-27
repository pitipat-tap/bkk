@extends("..layouts.head")


@section("specific_css")
{!! Html::style("css/attraction-category.css") !!}
@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")
@include("web.banner-picture")

<div class="body-section">
    <div class="banner-page-title">
       <span lang="th">Attraction</span>
       <span lang="en">Attraction</span>
       <span lang="jp">Attraction</span>
       <span lang="ch">Attraction</span>
    </div>
	<div id="category-container-1" class="category-container">
		<a href="#">
			<div class="category-picture show-for-large">
				{!! HTML::image("http://placehold.it/1248x412","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-picture hide-for-large">
				{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-description">
				<h3 lang="th">ARTS AND CULTURE</h3>
				<h3 lang="en">ARTS AND CULTURE</h3>
				<h3 lang="jp">ARTS AND CULTURE</h3>
				<h3 lang="ch">ARTS AND CULTURE</h3>
				<br class="show-for-large">
				<h5 lang="th" class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
				<h5 lang="en" class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
				<h5 lang="jp" class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
				<h5 lang="ch" class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
			</div>
		</a>
	</div>
	<div>
		<div id="category-container-2" class="category-container">
			<a href="#">
				<div class="category-picture show-for-large">
					{!! HTML::image("http://placehold.it/620x412","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="category-picture hide-for-large">
					{!! HTML::image("http://placehold.it/300x400","bkk-logo",array("class"=>"")) !!}
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
			<a href="">
				<div class="category-picture show-for-large">
					{!! HTML::image("http://placehold.it/620x412","bkk-logo",array("class"=>"")) !!}
				</div>
				<div class="category-picture hide-for-large">
					{!! HTML::image("http://placehold.it/300x400","bkk-logo",array("class"=>"")) !!}
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
		<a href="#">
			<div class="category-picture show-for-large">
				{!! HTML::image("http://placehold.it/1248x412","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-picture hide-for-large">
				{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-description">
				<h3>Events</h3>
				<br class="show-for-large">
				<h5 lang="th" class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
				<h5 lang="en" class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
				<h5 lang="jp" class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
				<h5 lang="ch" class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
			</div>
		</a>
	</div>
	<div id="category-container-5" class="category-container">
		<a href="#">
			<div class="category-picture show-for-large">
				{!! HTML::image("http://placehold.it/1248x412","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-picture hide-for-large">
				{!! HTML::image("http://placehold.it/400x300","bkk-logo",array("class"=>"")) !!}
			</div>
			<div class="category-description">
				<h3 lang="th">Shopping</h3>
				<h3 lang="en">Shopping</h3>
				<h3 lang="jp">Shopping</h3>
				<h3 lang="ch">Shopping</h3>
				<h5 lang="th" class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
				<h5 lang="en" class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
				<h5 lang="jp" class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
				<h5 lang="ch" class="show-for-large">
					Vestibulum at sagittis risus. Donec iaculis enim ac faucibus pretium. Suspendisse molestie tellus ac ipsum 
					eleifend fermentum. Curabitur consequat venenatis dui, et auctor metus semper nec.
				</h5>
			</div>
		</a>
	</div>
</div>

@include("web.footer")
@stop
