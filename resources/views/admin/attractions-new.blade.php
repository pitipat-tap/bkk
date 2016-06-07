@extends("../admin-layouts.main-admin")


@section("title")
Add New Work Post | 
@stop


@section("specific_css")
{!! Html::style("/js/fancybox/source/jquery.fancybox.css", array("media" => "screen")) !!}
@stop


@section("specific_js_head")
{!! Html::script("/js/tinymce/tinymce.min.js") !!}
{!! Html::script("/js/fancybox/source/jquery.fancybox.pack.js") !!}
{!! Html::script("/js/backend/admin-attraction-form.js") !!}
<script>
	window.onload = function() {
	 $(':text[name="title"]').focus();
	}
</script>
@stop

@section("body")

@include("admin-layouts.menu-admin", array("link" => "attractions", "has_sublink" => 0, "sublink" => ""))

<?php
	if(!isset($_SESSION)){
		session_start();
	}
	$_SESSION["USER_ROLE"] = Auth::user()->role;
	
	$lpath = getLinkPath();
?>

<div class="row full-width container ui-block mg-b small-medium-header hide-for-large-up">
	<div class="small-6 columns">
			<a class="side-menu-toggle link-icon" data-side="left">
				<span class="fa fa-bars"></span>
			</a>
	</div>
</div>

<div id="admin-workposts" class="container">
	{!! Form::open(array("route" => "admin-attraction-create", "method" => "post", "class" => "post-form")) !!}
		<h3 class="title">{!! Html::linkRoute("admin-attractions", "Attractions") !!} 
			<span class="fa fa-angle-right"></span> Add
		</h3><br>
		
		@include("admin.alert-box")

		<div class="medium-button-group show-for-medium-up">
			{!! Form::button("Publish", 
				array(
					"class" => "button mg-r", 
					"type" => "submit", 
					"name" => "status", 
					"value" => "published"
					)
				) 
			!!}
			<br><br>
		</div>
		<div class="row full-width">
			<div class="small-12 columns">
				<div class="ui-block mg-b medium-half-mg-r">
					<div class="row">
						<div class="small-12 columns" >
							<div class="ui-block mg-b medium-half-mg-l">
								<div class="row">
									<div class="small-12 columns" >
										{!! Form::checkbox('attraction', 'true') !!}
										{!! Form::label('attraction', 'Attraction') !!}
										<div class="show-for-small-only"> <br> </div>
										{!! Form::checkbox('accommodation', 'true') !!}
										{!! Form::label('accommodation', 'Accommodation') !!}
										<div class="show-for-small-only"> <br> </div>
										{!! Form::checkbox('event', 'true') !!}
										{!! Form::label('event', 'Event') !!}
									</div>
									<div class="small-12 medium-6 large-3 end columns" >
										{!! Form::label("category", "Category") !!}
				               			{!! Form::select('category', array(
												'arts_and_culture' => 'ARTS and CULTURE',
												'food_and_drink' => 'FOOD and DRINK',
												'parks_and_gardens' => 'PARKS and GARDENS',
												'events' => 'Events',
												'shopping' => 'Shopping'
											))
										!!}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="small-12 large-6 columns">
							<div class="ui-block mg-b medium-half-mg-l">
								<div class="row">
									<h6>Thai</h6>
									<div class="small-12 large-6 columns" >
										{!! Form::label("title_thai", "Title") !!}
										{!! Form::text("title_thai", null) !!}
									</div>
									<div class="small-12 large-6 columns" >
										{!! Form::label("opening_day_thai", "Opening day") !!}
										{!! Form::text("opening_day_thai","ทุกวัน", null) !!}
									</div>
									<div class="small-12 columns">
										{!! Form::label("description_thai", "Description") !!}
										{!! Form::textarea("description_thai", null, array("rows" => "4")) !!}
									</div>
								</div>
							</div>
						</div>
						<div class="small-12 large-6 columns">
							<div class="ui-block mg-b medium-half-mg-l">
								<div class="row">
									<h6>English</h6>
									<div class="small-12 large-6 columns" >
										{!! Form::label("title_english", "Title") !!}
										{!! Form::text("title_english", null) !!}
									</div>
									<div class="small-12 large-6 columns" >
										{!! Form::label("opening_day_english", "Opening day") !!}
										{!! Form::text("opening_day_english","everyday", null) !!}
									</div>
									<div class="small-12 columns">
										{!! Form::label("description_english", "Description") !!}
										{!! Form::textarea("description_english", null, array("rows" => "4")) !!}
									</div>
								</div>
							</div>
						</div>
						<div class="small-12 large-6 columns">
							<div class="ui-block mg-b medium-half-mg-l">
								<div class="row">
									<h6>Japan</h6>
									<div class="small-12 large-6 columns" >
										{!! Form::label("title_japan", "Title") !!}
										{!! Form::text("title_japan", null) !!}
									</div>
									<div class="small-12 large-6 columns" >
										{!! Form::label("opening_day_japan", "Opening day") !!}
										{!! Form::text("opening_day_japan","everyday", null) !!}
									</div>
									<div class="small-12 columns">
										{!! Form::label("description_japan", "Description") !!}
										{!! Form::textarea("description_japan", null, array("rows" => "4")) !!}
									</div>
								</div>
							</div>
						</div>
						<div class="small-12 large-6 columns">
							<div class="ui-block mg-b medium-half-mg-l">
								<div class="row">
									<h6>China</h6>
									<div class="small-12 large-6 columns" >
										{!! Form::label("title_china", "Title") !!}
												{!! Form::text("title_china", null) !!}
									</div>
									<div class="small-12 large-6 columns" >
										{!! Form::label("opening_day_china", "Opening day") !!}
										{!! Form::text("opening_day_china","everyday", null) !!}
									</div>
									<div class="small-12 columns">
										{!! Form::label("description_china", "Description") !!}
										{!! Form::textarea("description_china", null, array("rows" => "4")) !!}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="small-12 columns" >
							<div class="ui-block mg-b medium-half-mg-l">
								<div class="row">
									<div class="small-12 large-6 columns" >
										{!! Form::label("opening_hours", "Opening Hours") !!}
										{!! Form::text("opening_hours", null) !!}
									</div>
									<div class="small-12 large-6 columns" >
										{!! Form::label("admission_free", "Admission Fee") !!}
										{!! Form::text("admission_free", null) !!}
									</div>
									<div class="small-12 columns">
										{!! Form::label("address", "Address") !!}
										{!! Form::textarea("address", null, array("rows" => "2")) !!}
									</div>
									<div class="small-12 columns">
										{!! Form::label("commute", "Commute") !!}
										{!! Form::textarea("commute", null, array("rows" => "2")) !!}
									</div>
									<div class="small-12 columns" >
										{!! Form::label("map_url", "Map URL") !!}
										{!! Form::text("map_url", null) !!}
									</div>
									<div class="small-12 columns" >
										{!! Form::label("remark", "Remark") !!}
										{!! Form::text("remark", null) !!}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						@for($i = 1; $i <= 5; $i++)
							@if($i != 5)
							<div class="small-12 large-4 columns">
							@else
							<div class="small-12 large-4 columns end">
							@endif
								<div class="ui-block mg-b medium-half-mg-l">
									<p class="f-label">Image {!! $i !!}</p>
									<?php $p_link = "http://".$_SERVER['SERVER_NAME'].$lpath."/filemanager/dialog.php?type=1&field_id=screenshots-URL".$i; ?>
									<a class="select-image-open" href="<?php echo $p_link; ?>">
										@if( old('image_url_'.$i) != null && old('image_url_'.$i) != '')
						                    {!! Html::image(old('image_url_'.$i), 
						                        "Image-$i", 
						                        array(
						                            "id" => "screenshots".$i ,
						                            "class" => "post-image"
						                            )
						                        )
						                    !!}
						                @else 
											{!! Html::image("/images/admin/icon-placeholder.svg", 
												"Image-$i", 
													array(
														"id" => "screenshots".$i ,
														"class" => "post-image"
													)
												)
											!!}
										@endif
									</a>
									{!! Form::text("image_url_".$i, 
										null, 
										array(
												"id" => "screenshots-URL".$i,
												"class" => "image-url far-away",
												"autocomplete" => "off",
												"readonly" => "readonly"
											)
										)
									!!}
									<br><br>
									<p>
										<button class="select-image-open" type="button" href="<?php echo $p_link; ?>">
											Select Image
										</button>
										<button class="remove-image" type="button" onclick="removeImage('{!! $i !!}')" >
											Remove Image
										</button>
									</p>
								</div>
							</div>
							@if( $i%3 == 0)
								</div>
								<div class="row">
							@endif
						@endfor
					</div>
				</div>
			</div>
		</div>
		
		<div class="small-button-group show-for-small-only">
			{!! Form::button("Publish", 
					array(
						"class" => "button", 
						"type" => "submit", 
						"name" => "status", 
						"value" => "published"
						)
					) 
			 !!}
			 <br /><br />
		 </div>
	{!! Form::close() !!}
</div>

@stop







