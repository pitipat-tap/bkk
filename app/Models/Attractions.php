<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attractions extends Model {

	protected $table = 'attractions';

	public static function save_rules($id = null) {
		return array(
			"title_thai" => "required",
            "title_english" => "required",
            "description_thai" => "required",
            "description_english" => "required",
		);
	}

	public static $custom_messages = array(
		"title_thai.required" => "The title thai is required.",
		"title_english.required" => "The title english is required.", 
		"description_thai.required" => "The description thai required.",
		"description_english.required" => "The description english required.",
	);

	public function author()
	{
	    return $this->belongsTo('App\Models\User', 'author_id');
	}

}
