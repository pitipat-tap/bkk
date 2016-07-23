<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventPost extends Model {

	protected $table = 'event_posts';

	public static function save_rules($id = null) {
		return array(
			"title" => "required",
			"url" => "alpha_dash|required|unique:event_posts,url".($id ? ",".$id : ""),
			"content" => "required",
			"status" => "in:draft,published",
			"image_url_1" => "required",
			"categories" => "array"
		);
	}

	public static $custom_messages = array(
		"image_url_1.required" => "The featured image is required."
	);

	public function author()
	{
	    return $this->belongsTo('App\Models\User', 'author_id');
	}

	public function tags()
	{
		return $this->belongsToMany('App\Models\EventTag', 'event_tags_posts', 'post_id', 'tag_id')->withTimestamps();
	}

}
