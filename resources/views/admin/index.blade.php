@extends("../admin-layouts.main-admin")


@section("title")
Dashboard | 
@stop


@section("specific_js_head")
{!! Html::script("/js/Chart.min.js") !!}
{!! Html::script("/js/moment.min.js") !!}
{!! Html::script("/js/backend/admin-index.js") !!}
@stop


@section("body")

@include("admin-layouts.menu-admin", array("link" => "dashboard", "has_sublink" => 0, "sublink" => ""))

<div class="row container ui-block mg-b small-medium-header hide-for-large-up">
    <div class="small-6 columns">
        <a class="side-menu-toggle link-icon" data-side="left">
            <span class="fa fa-bars"></span>
        </a>
    </div>
</div>

<div id="dashboard" class="container">
	<h3 class="title">Dashboard</h3>
	<br />

	<ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-4 stat-block-group">
		<li>
			<a href="{!! URL::route('admin-image-posts') !!}" class="count-block">
				<div class="ui-block align-center">
					<h4>{!! $imageposts->count() !!}</h4>
					<p>Image posts</p>
				</div>
			</a>
		</li>
		
		<li>
			<a href="{!! URL::route('admin-attractions') !!}" class="count-block">
				<div class="ui-block align-center">
					<h4>{!! $attractions->count() !!}</h4>
					<p>Attractions</p>
				</div>
			</a>
		</li>
	</ul>
	<br />
	
</div>

@stop
