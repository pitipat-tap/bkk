<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventTag extends Model {

	protected $table = 'event_tags';

    public static $save_rules = array(
        "name" => "required|unique:event_tags",
    );

	public function posts()
	{
	    return $this->belongsToMany('App\Models\EventPost', 'event_tags_posts', 'tag_id', 'post_id')->withTimestamps();;
	}

}
