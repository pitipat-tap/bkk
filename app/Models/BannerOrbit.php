<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerOrbit extends Model {

	protected $table = 'banner_orbit';
	
	public static $save_rules = array(
	    'desktop_image_url' => "required",
        'tablet_image_url' => "required",
        'mobile_image_url' => "required"
	);
	
	public static $custom_messages = array(
		"desktop_image_url.required" => "The Desktop image is required.",
		"tablet_image_url.required" => "The Tablet image is required.",
		"mobile_image_url.required" => "The Mobile image is required."
	);
	
	public function author()
	{
	    return $this->belongsTo('App\Models\User', 'author_id');
	}

}