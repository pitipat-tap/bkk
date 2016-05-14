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

Route::get('/transportation', function () {
    return view('web/transportation');
});

Route::get('/aboutus', function () {
    return view('web/aboutUs');
});

Route::get('/faq', function () {
    return view('web/faq');
});
