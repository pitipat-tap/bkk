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
use App\Models\BannerOrbit;
use App\Models\Attractions;
Route::get('/', function () {
	$banners = BannerOrbit::orderBy('sequence', 'ASC')->get();
    return view('web/home',array(
				"banners" => $banners
			));
});

Route::get('/home', function () {
    $banners = BannerOrbit::orderBy('sequence', 'ASC')->get();
    return view('web/home',array(
				"banners" => $banners
			));
});

Route::get('/attraction-category', function () {
    $artAndCulture = Attractions::where("category","arts_and_culture")->first();
    $foodAndDrink= Attractions::where("category","food_and_drink")->first();
    $parkAndGardens= Attractions::where("category","parks_and_gardens")->first();
    $events= Attractions::where("category","events")->first();
    $shopping= Attractions::where("category","shopping")->first();
    return view('web/attraction-category',array(
                "artAndCulture" => $artAndCulture,
                "foodAndDrink" => $foodAndDrink,
                "parkAndGardens" => $parkAndGardens,
                "events" => $events,
                "shopping" => $shopping,
    ));
});

Route::get('/attraction-select/{category}', function ($category) {
    $attractions = Attractions::where("category",$category)->paginate(5);
    return view('web/attraction-select',array(
        "attractions" => $attractions,
    ));
});

Route::get('/attraction/{id}', function ($id) {
    $attraction = Attractions::find($id);
    if(!$attraction){
        return redirect("/attraction-category");
    }
    return view('web/attraction',array(
        "attraction" => $attraction,
    ));
});

Route::get('/transportation', function () {
    return view('web/transportation');
});

Route::get('/gallery', function () {
    return view('web/gallery');
});

Route::get('/aboutus', function () {
    return view('web/aboutUs');
});

Route::get('/faq', function () {
    return view('web/faq');
});

Route::get('/useful-info', function () {
    return view('web/useful-info');
});

Route::get('/partners', function () {
    return view('web/partners');
});

Route::get("accommodation", array("as" => "accommodation", "uses" => "WebController@accommodation"));
Route::get("accommodation/{id}", array("as" => "accommodation-post", "uses" => "WebController@accommodationPost"));
Route::get("accommodationJson", array("as" => "accommodationJson", "uses" => "WebController@accommodationJson"));

Route::get("attractionJson", array("as" => "attractionJson", "uses" => "WebController@attractionJson"));

Route::get('/accommodation2', function () {
    return view('web/accommodation2');
});

Route::get('/trips', function () {
	return view('web/trips');
});

Route::get('/trip', function () {
	return view('web/trip');
});
Route::get('/one-day-trip', function () {
	return view('web/one-day-trip');
});

Route::group(array('middleware' => 'auth.staff.already', 'prefix' => 'admin'), function(){
	Route::get("login", array("as" => "admin-login", "uses" => "AdminAuthController@login"));
    Route::post("login", array("as" => "admin-auth", "uses" => "AdminAuthController@authenticate"));
    Route::get("register", array("as" => "admin-register", "uses" => "AdminAuthController@register"));
    Route::post("register", array("as" => "admin-create", "uses" => "AdminAuthController@create"));
});

Route::group(array('middleware' => 'auth.staff', 'prefix' => 'admin'), function(){
	// Commons
	Route::get('/', array("as" => "admin", "uses" => 'AdminCommonController@index'));
	Route::get("editprofile", array("as" => "admin-profile-edit", "uses" => "AdminCommonController@editProfile"));
	Route::patch("editprofile", array("as" => "admin-profile-update", "uses" => "AdminCommonController@updateProfile"));
	Route::get("logout", array("as" => "admin-logout", "uses" => "AdminAuthController@logout"));
	
	// Blog Post
	Route::get("blogposts", array("as" => "admin-blog-posts", "uses" => "AdminEventController@blogPosts"));
	Route::get("blogposts/new", array("as" => "admin-blog-post-new", "uses" => "AdminEventController@newEventPost"));
	Route::post("blogposts/new", array("as" => "admin-blog-post-create", "uses" => "AdminEventController@createEventPost"));
	Route::get("blogposts/{id}", array("as" => "admin-blog-post-preview", "uses" => "AdminEventController@previewEventPost"));
    Route::post("blogposts/livepreview", array("as" => "admin-blog-post-livepreview", "uses" => "AdminEventController@livePreviewEventPost"));
	Route::get("blogposts/{id}/edit", array("as" => "admin-blog-post-edit", "uses" => "AdminEventController@editEventPost"));
	Route::patch("blogposts/{id}", array("as" => "admin-blog-post-update", "uses" => "AdminEventController@updateEventPost"));
	Route::delete("blogposts/{id}", array("as" => "admin-blog-post-delete", "uses" => "AdminEventController@deleteEventPost"));
	
	// Blog Tag
	Route::get("blogtags", array("as" => "admin-blog-tags", "uses" => "AdminEventController@blogTags"));
	
	// Image Post
	Route::get("imageposts", array("as" => "admin-image-posts", "uses" => "AdminImageController@imagePosts"));
	Route::get("imageposts/new", array("as" => "admin-image-post-new", "uses" => "AdminImageController@newImagePost"));
	Route::post("imageposts/new", array("as" => "admin-image-post-create", "uses" => "AdminImageController@createImagePost"));
	Route::get("imageposts/{id}", array("as" => "admin-image-post-preview", "uses" => "AdminImageController@previewImagePost"));
    Route::post("imageposts/livepreview", array("as" => "admin-image-post-livepreview", "uses" => "AdminImageController@livePreviewImagePost"));
	Route::get("imageposts/{id}/edit", array("as" => "admin-image-post-edit", "uses" => "AdminImageController@editImagePost"));
	Route::patch("imageposts/{id}", array("as" => "admin-image-post-update", "uses" => "AdminImageController@updateImagePost"));
	Route::delete("imageposts/{id}", array("as" => "admin-image-post-delete", "uses" => "AdminImageController@deleteImagePost"));
	
	// Image Tag
	Route::get("imagetags", array("as" => "admin-image-tags", "uses" => "AdminImageController@imageTags"));
	Route::delete("imagetags/{id}", array("as" => "admin-blog-tag-delete", "uses" => "AdminImageController@deleteImageTag"));
	
	// File manager
	Route::get("filemanager", array("as" => "admin-filemanager", "uses" => "AdminCommonController@fileManager"));
	
	
	// Ajax
	// Dashboard
	Route::post("statistic-graph", array("as" => "admin-statistic-graph", "uses" => "AdminCommonController@statisticGraph"));
});

Route::group(array('middleware' => 'auth.admin', 'prefix' => 'admin'), function(){
	// Blog post
	Route::get("blogposts/{id}/togglefeatured", array("as" => "admin-blog-post-togglefeatured", 
		"uses" => "AdminEventController@toggleFeaturedEventPost"));
	
	// Blog tag
	Route::delete("blogtags/{id}", array("as" => "admin-blog-tag-delete", "uses" => "AdminEventController@deleteEventTag"));
	Route::get("blogtags/{id}/togglefeatured", array("as" => "admin-blog-tag-togglefeatured", 
		"uses" => "AdminEventController@toggleFeaturedEventTag"));
		
	// Image post
	Route::get("imageposts/{id}/togglefeatured", array("as" => "admin-image-post-togglefeatured", 
		"uses" => "AdminImageController@toggleFeaturedImagePost"));
		
	// Image tag
	Route::delete("imagetags/{id}", array("as" => "admin-image-tag-delete", "uses" => "AdminImageController@deleteImageTag"));
	Route::get("imagetags/{id}/togglefeatured", array("as" => "admin-image-tag-togglefeatured", 
		"uses" => "AdminImageController@toggleFeaturedImageTag"));
	
	// User
	Route::get("users", array("as" => "admin-users", "uses" => "AdminUserController@users"));
	Route::get("users/new", array("as" => "admin-user-new", "uses" => "AdminUserController@newUser"));
	Route::post("users/new", array("as" => "admin-user-create", "uses" => "AdminUserController@createUser"));
	Route::get("users/{id}/edit", array("as" => "admin-user-edit", "uses" => "AdminUserController@editUser"));
	Route::patch("users/{id}", array("as" => "admin-user-update", "uses" => "AdminUserController@updateUser"));
	Route::delete("users/{id}", array("as" => "admin-user-delete", "uses" => "AdminUserController@deleteUser"));

	Route::get("banners", array("as" => "admin-banners", "uses" => "AdminBannerController@banners"));
	Route::get("banners/new", array("as" => "admin-banner-new", "uses" => "AdminBannerController@newBanner"));
	Route::post("banners/new", array("as" => "admin-banner-create", "uses" => "AdminBannerController@createBanner"));
	Route::get("banners/{id}/edit", array("as" => "admin-banner-edit", "uses" => "AdminBannerController@editBanner"));
	Route::patch("banners/{id}", array("as" => "admin-banner-update", "uses" => "AdminBannerController@updateBanner"));
	Route::get("banners/{id}/moveup", array("as" => "admin-banner-move-up", "uses" => "AdminBannerController@moveUpBanner"));
	Route::get("banners/{id}/movedown", array("as" => "admin-banner-move-down", "uses" => "AdminBannerController@moveDownBanner"));
	Route::get("banners/delete/{id}", array("as" => "admin-banner-delete", "uses" => "AdminBannerController@deleteBanner"));

	Route::get("attractions", array("as" => "admin-attractions", "uses" => "AdminAttractionsController@attractions"));
	Route::get("attractions/new", array("as" => "admin-attraction-new", "uses" => "AdminAttractionsController@newAttraction"));
	Route::post("attractions/new", array("as" => "admin-attraction-create", "uses" => "AdminAttractionsController@createAttraction"));
	Route::get("attractions/{id}/edit", array("as" => "admin-attraction-edit", "uses" => "AdminAttractionsController@editAttraction"));
	Route::patch("attractions/{id}", array("as" => "admin-attraction-update", "uses" => "AdminAttractionsController@updateAttraction"));
	Route::delete("attractions/{id}", array("as" => "admin-attraction-delete", "uses" => "AdminAttractionsController@deleteAttraction"));

	// Route::get("workposts/{id}/togglefeatured", array("as" => "admin-attraction-toggle-selected", 
	// 	"uses" => "AdminAttractionsController@toggleSelectedWork"));

});
