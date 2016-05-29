@extends("../admin-layouts.main-admin")


@section("title")
Attractions | 
@stop


@section("specific_js_head")

@stop


<?php
use Chromabits\Pagination\FoundationPresenter;
use Illuminate\Support\Facades\Input;
?>


@section("body")

@include("admin-layouts.menu-admin", array("link" => "attractions", "has_sublink" => 0, "sublink" => ""))

<nav id="right-side-menu" class="side-menu full-height">
	<br />
	<ul class="root-menu">
		<li><h4>Filter</h4></li>
        <li class="has-pd">
        	{!! Form::label("status-select", "Status") !!}
			{!! Form::select("status", 
		    	array(
		    		"null" => "All", 
		    		"published" => "Published", 
		    		"draft" => "Draft"
    			), 
	    		Input::get("status"),
	    		array("class" => "status-select", "data-media" => "small-medium")
    		) !!}
		</li>
        <li class="has-pd">
        	{!! Form::open(array("route" => "admin-attractions", "method" => "GET")) !!}
				{!! Form::label("q", "Search") !!}
				<div class="row collapse">
					<div class="small-9 columns">
						{!! Form::text("q", Input::get("q")) !!}
					</div>
					<div class="small-3 columns">
						<button type="submit" class="button secondary postfix"><span class="fa fa-search"></span></button>
					</div>
				</div>
			{!! Form::close() !!}
        </li>    
    </ul>
</nav>

<div class="row container ui-block mg-b small-medium-header hide-for-large-up">
    <div class="small-6 columns">
        <a class="side-menu-toggle link-icon" data-side="left">
            <span class="fa fa-bars"></span>
        </a>
    </div>
    <div class="small-6 columns align-right">
    	<a class="link-icon mg-r" href="{!! URL::route('admin-attraction-new') !!}">
    		<span class="fa fa-plus"></span>
    	</a>
        <a class="side-menu-toggle link-icon" data-side="right">
            <span class="fa fa-search"></span>
        </a>
    </div>
</div>

<div id="admin-blogposts" class="container">
	<h3 class="title">Attractions</h3>
	<br />
	
	@include("admin.alert-box")
	
	@if (Input::get("q") != null || 
		Input::get("status") != null || 
		Input::get("author") != null || 
		Input::get("tag") != null
		)
		<div class="hide-for-large-up">
			@if (Input::get("status") != null)
				<p>Status : {!! Input::get("status") !!}</p>
			@endif
			@if (Input::get("q") != null)
				<p>Search : "{!! Input::get("q") !!}"</p>
			@endif
			
			@if (Input::get("author") != null)
				<p>Author : {!! Input::get("author") !!}</p>
			@elseif (Input::get("tag") != null)
				<p>Tag : {!! Input::get("tag") !!}</p>
			@endif
			
			<p>({!! Html::linkRoute("admin-attractions", "View all data") !!})</p>
			<br />
		</div>
	@endif
	
	<div class="show-for-large-up">
		{!! Html::linkRoute("admin-attraction-new", "Add Attraction", [], array("class" => "button")) !!}
		<br /><br />
	</div>
	
	<div class="row full-width ui-block mg-b show-for-large-up">
		<div class="small-12 columns">
			<h4>Filter</h4>
			
			@if (Input::get("q") != null || 
				Input::get("status") != null || 
				Input::get("author") != null || 
				Input::get("tag") != null
				)
				
				@if (Input::get("author") != null)
					<p>Author : {!! Input::get("author") !!}</p>
				@elseif (Input::get("tag") != null)
					<p>Tag : {!! Input::get("tag") !!}</p>
				@endif
				
				<p>({!! Html::linkRoute("admin-attractions", "View all data") !!})</p>
				<br />
				
			@endif
		</div>
		
		<div class="small-12 large-4 columns medium-pd-r">
			{!! Form::label("status-select", "Status") !!}
			{!! Form::select("status", 
		    	array(
		    		"null" => "All", 
		    		"published" => "Published", 
		    		"draft" => "Draft"
    			), 
	    		Input::get("status"),
	    		array("class" => "status-select", "data-media" => "large")
    		) !!}
		</div>
		
		<div class="small-12 large-4 columns medium-pd-l">
			{!! Form::open(array("route" => "admin-attractions", "method" => "GET")) !!}
				{!! Form::label("q", "Search") !!}
				<div class="row collapse">
					<div class="small-9 columns">
						{!! Form::text("q", Input::get("q")) !!}
					</div>
					<div class="small-3 columns">
						{!! Form::button("Search", 
							array(
				                "class" => "button secondary postfix", 
				                "type" => "submit"
			                )
						) !!}
					</div>
				</div>
			{!! Form::close() !!}
		</div>
		
		<div class="small-12 large-4 columns"></div>
	</div>
	
	<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
		@foreach ($attractions as $attraction)
			<li>
				<div class="post-item ui-block ui-card no-pd">
					<p class="post-feature-image">{!! Html::image($attraction->image_url_1) !!}</p>
					<div class="post-details">
						<h5>
							{!! $attraction->title_thai !!}
							<span class="status">{!! ($attraction->status == "draft") ? " (".$attraction->status.")" : "" !!}</span>
						</h5>
						
						<p class="show-for-large-up">
							By 
							{!! Html::linkRoute("admin-attractions", $attraction->author->username, 
							array("author" => $attraction->author->username)) !!}
						</p>
						
						<p class="text-date show-for-large-up">Created : {!! date("M n, Y g:i A", strtotime($attraction->created_at)) !!}</p>
						@if ($attraction->updated_at != $attraction->created_at)
							<p class="text-date show-for-large-up">Last edited : {!! date("M n, Y g:i A", strtotime($attraction->updated_at)) !!}</p>
						@endif
						
						<p class="text-date show-for-large-up">{!! $attraction->hits !!} views</p>
						
						<div class="row">
							<div class="small-6 columns">
								@if (Auth::user()->role == "admin" || Auth::user()->id == $attraction->author->id)
									{!! Html::linkRoute("admin-attraction-edit", "Edit", 
										array($attraction->id), 
										array("class" => "card-button"))
									!!}
								@else
									<span class="card-button disabled">Edit</span>
								@endif
							</div>
							<div class="small-6 columns">
								@if (Auth::user()->role == "admin" || Auth::user()->id == $attraction->author->id)
									<a class="card-button end" data-reveal-id="delete-modal-id-{!! $attraction->id !!}">Delete</a>
									<div id="delete-modal-id-{!! $attraction->id !!}" class="reveal-modal tiny" data-reveal>
										<h4>Confirm delete</h4>
										<p>"{!! $attraction->title_thai !!}"</p>
										{!! Form::open(array("route" => array("admin-attraction-delete", $attraction->id), "method" => "delete")) !!}
											{!! Form::button("Delete", array("type" => "submit")) !!}
										{!! Form::close() !!}
										<a class="close-reveal-modal">&#215;</a>
									</div>
								@else
									<span class="card-button end disabled">Delete</span>
								@endif
							</div>
						</div>
					</div>
				</div>
			</li>
		@endforeach
	</ul>
	
	@if ($attractions->total() > $attractions->perPage())
		<div class="pagination-container">
			{!! str_replace('/?', '?', $attractions->appends(Request::except("page"))->render(new FoundationPresenter($attractions))) !!}
		</div>
	@endif
</div>

@stop

