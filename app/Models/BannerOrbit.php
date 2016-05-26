<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerOrbit extends Model {

	protected $table = 'banner_orbit';
	
	public static $save_rules = array(
		"image_url" => "required"
	);
	
	public static $custom_messages = array(
		"image_url.required" => "The image is required."
	);
	
	public function author()
	{
	    return $this->belongsTo('App\Models\User', 'author_id');
	}

}