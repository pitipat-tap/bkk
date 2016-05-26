@extends("../admin-layouts.main-admin")


@section("title")
Banner Orbit | 
@stop


@section("specific_js_head")

@stop


<?php
use Chromabits\Pagination\FoundationPresenter;
use Illuminate\Support\Facades\Input;
?>


@section("body")

@include("admin-layouts.menu-admin", array("link" => "banner_orbit", "has_sublink" => 0, "sublink" => ""))

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
    </div>
</div>

<div id="admin-blogposts" class="container">
	<h3 class="title">Banner Orbit</h3>
	<br />
	<div class="show-for-large-up">
		{!! Html::linkRoute("admin-banner-new", "Add Banner", [], array("class" => "button")) !!}
		<br /><br />
	</div>
</div>
<div class="container">
	<table class="data" width="100%">
            <thead>
            <tr>
            	<th class="show-for-large-up" style="width: 5%">Index</th>
            	<th style="width: 40%">Image</th>
                <th class="show-for-large-up"style="width: 30%">Name</th>
                <th style="width: 25%">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $index=>$banner)
                <tr>
                	<td class="show-for-large-up">
                		<p>{!! $banner->sequence !!}</p>
                	</td>
                    <td>
                    	{!! Html::image($banner->image_url, 'alt', array( 'style' => "height: 150px" )) !!}
                    </td>
                    <td class="show-for-large-up">
                    	<h5> {!! $banner->name !!} </h5>
                    	<p> {!! $banner->caption !!} </p>
                    </td>
                    <td>
                    	<a class="button " href="{!! URL::route('admin-banner-edit', array($banner->id)) !!}" data-reveal-id="myModal{!! $banner->id !!}">edit</a>
                        <a class="button alert" href="{!! URL::route('admin-banner-delete', array($banner->id)) !!}" data-reveal-id="myModal{!! $banner->id !!}">Delete</a> <br><br>
                        @if( $index == 0 )
                        	<a class="button disabled" href="#" data-reveal-id="myModal{!! $banner->id !!}">Move Up</a>
                        @else
                        	<a class="button success" href="{!! URL::route('admin-banner-move-up', array($banner->id)) !!}"" data-reveal-id="myModal{!! $banner->id !!}">Move Up</a>
                        @endif
                    	@if( $index+1 ==  sizeof($banners))
                        	<a class="button disabled" href="#" data-reveal-id="myModal{!! $banner->id !!}">Move Down</a>
                        @else
                        	<a class="button success" href="{!! URL::route('admin-banner-move-down', array($banner->id)) !!}"" data-reveal-id="myModal{!! $banner->id !!}">Move Down</a>
                        @endif
                    	
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop

