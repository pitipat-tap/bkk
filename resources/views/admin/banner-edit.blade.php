@extends("../admin-layouts.main-admin")


@section("title")
Add New Image Post | 
@stop


@section("specific_css")
{!! Html::style("/js/fancybox/source/jquery.fancybox.css", array("media" => "screen")) !!}
@stop


@section("specific_js_head")
{!! Html::script("/js/tinymce/tinymce.min.js") !!}
{!! Html::script("/js/fancybox/source/jquery.fancybox.pack.js") !!}
{!! Html::script("/js/backend/admin-banner-form.js") !!}
@stop


@section("body")

@include("admin-layouts.menu-admin", array("link" => "banners", "has_sublink" => 0, "sublink" => ""))

<?php
    if(!isset($_SESSION)) 
        session_start(); 

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

<div id="admin-imageposts" class="container">
    {!! Form::model($banner, array(
        "class" => "post-form", 
        "route" => array("admin-banner-update", $banner->id), 
        "method" => "patch", 
        "autocomplete" => "off"))
    !!}
		<h3 class="title">{!! Html::linkRoute("admin-banners", "Banner Ordit") !!} <span class="fa fa-angle-right"></span> Add</h3>
		<br />
		
		@include("admin.alert-box")
        
        <div class="show-for-medium-up">
			{!! Form::button("Save", 
	            array(
	                "class" => "button", 
	                "type" => "submit", 
	                )
	            ) 
	        !!}
	        <br /><br />
        </div>
        
        <div class="row full-width">
            <div class="small-12 columns">
                <div class="ui-block mg-b medium-half-mg-r">
                    <div class="row">
                        <div class="small-12 medium-6 columns">
                            {!! Form::label("name", "Name") !!}
                            {!! Form::text("name", null) !!}
                        </div>
                        <div class="small-12 medium-6 columns">
                            {!! Form::label("link_url", "link URL") !!}
                            {!! Form::text("link_url", null) !!}
                        </div>
                        <div class="small-12 columns">
                            {!! Form::label("caption", "Caption") !!}
                            {!! Form::textarea("caption", null, array("rows" => "5")) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row full-width">
            <div class="small-12 medium-4 columns">
                <div class="ui-block mg-b medium-half-mg-l">
                    <p class="f-label">Desktop Image</p>
                    <?php $p_link = "http://".$_SERVER['SERVER_NAME'].$lpath."/filemanager/dialog.php?type=1&field_id=desktop-image-url"; ?>
                    <a class="desktop-banner-open" href="<?php echo $p_link; ?>">
                        {!! Html::image($banner->desktop_image_url, 
                            "Image", 
                            array(
                                "id" => "desktop-post-image",
                                "class" => "post-image-new"
                                )
                            )
                        !!}
                    </a>
                    {!! Form::text("desktop_image_url", 
                        null, 
                        array(
                            "id" => "desktop-image-url",
                            "class" => "image-url far-away",
                            "autocomplete" => "off",
                            "readonly" => "readonly"
                            ) 
                        ) 
                    !!}
                        
                    <p>
                        <a class="desktop-banner-open" type="button" href="<?php echo $p_link; ?>">Select Image</a>
                    </p>
                </div>
            </div>

            <div class="small-12 medium-4 columns">
                <div class="ui-block mg-b medium-half-mg-l">
                    <p class="f-label">Tablet Image</p>
                    <?php $p_link = "http://".$_SERVER['SERVER_NAME'].$lpath."/filemanager/dialog.php?type=1&field_id=tablet-image-url"; ?>
                    <a class="tablet-banner-open" type="button" href="<?php echo $p_link; ?>">
                        {!! Html::image($banner->tablet_image_url, 
                            "Image", 
                            array(
                                "id" => "tablet-post-image",
                                "class" => "post-image-new"
                                )
                            )
                        !!}
                    </a>
                    {!! Form::text("tablet_image_url", 
                        null, 
                        array(
                            "id" => "tablet-image-url",
                            "class" => "image-url far-away",
                            "autocomplete" => "off",
                            "readonly" => "readonly"
                            ) 
                        ) 
                    !!}
                        
                    <p>
                        <a class="tablet-banner-open" type="button" href="<?php echo $p_link; ?>">Select Image</a>
                    </p>

                </div>
            </div>

            <div class="small-12 medium-4 columns">
                <div class="ui-block mg-b medium-half-mg-l">
                    <p class="f-label">Mobile Image</p>
                    <?php $p_link = "http://".$_SERVER['SERVER_NAME'].$lpath."/filemanager/dialog.php?type=1&field_id=moblie-image-url"; ?>
                    <a class="mobile-banner-open" type="button" href="<?php echo $p_link; ?>">
                        {!! Html::image($banner->mobile_image_url, 
                            "Image", 
                            array(
                                "id" => "moblie-post-image",
                                "class" => "post-image-new"
                                )
                            )
                        !!}
                    </a>
                    {!! Form::text("mobile_image_url", 
                        null, 
                        array(
                            "id" => "moblie-image-url",
                            "class" => "image-url far-away",
                            "autocomplete" => "off",
                            "readonly" => "readonly"
                            ) 
                        ) 
                    !!}
                        
                    <p>
                        <a class="mobile-banner-open" type="button" href="<?php echo $p_link; ?>">Select Image</a>
                </p>
            </div>
    	</div>
    	
    	<div class="small-button-group show-for-small-only">
        	{!! Form::button("Save", 
	            array(
	                "class" => "button", 
	                "type" => "submit", 
	                )
	            ) 
	        !!}
	        <br /><br />
        </div>
		
	{!! Form::close() !!}
</div>

@stop