<?php namespace App\Models\work;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $table = 'work_post';
	
	public static function save_rules($id = null) {
		return array(
			"status" => "in:draft,published",
			"title_thai" => "required",
			"title_english" => "required",
			"url" => "alpha_dash|required|unique:work_post,url".($id ? ",".$id : ""),
			"description_thai" => "required",
			"description_english" => "required",
			"image_url_1" => "required"
		);
	}
	
	public static $custom_messages = array(
		"image_url_1.required" => "The featured image is required."
	);
	
	public function author()
	{
	    return $this->belongsTo('App\Models\User', 'author_id');
	}

	public function categories()
	{
		return $this->belongsToMany('App\Models\work\PostCategories', 'author_id')->withTimestamps();
	}

	public function screenshots()
	{
	    return $this->belongsToMany('App\Models\work\Screenshot', 'work_id')->withTimestamps();
	}
}