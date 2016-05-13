<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('web/home');
});

Route::get('/home', function () {
    return view('web/home');
});

Route::get('/aboutus', function () {
    return view('web/aboutUs');
});

Route::get('/faq', function () {
    return view('web/faq');
});

Route::group(array('middleware' => 'auth.staff.already', 'prefix' => 'admin'), function(){
	Route::get("login", array("as" => "admin-login", "uses" => "AdminAuthController@login"));
    Route::post("login", array("as" => "admin-auth", "uses" => "AdminAuthController@authenticate"));
    Route::get("register", array("as" => "admin-register", "uses" => "AdminAuthController@register"));
    Route::post("register", array("as" => "admin-create", "uses" => "AdminAuthController@create"));
});