<?php namespace App\Http\Controllers;

use Request;
use Validator;
use Auth;
use Redirect;

use App\Models\User;
use App\Models\EventPost;
use App\Models\EventTag;

class AdminEventController extends Controller {
	
	// ----------------------------------------Blog Posts----------------------------------------
	public function blogPosts()
	{
		$q = Request::input("q");
		$status = Request::input("status");
		$author = Request::input("author");
		$tag = Request::input("tag");
		
		$posts = null;
		 
		if ($status != null) {
			$posts = EventPost::where("status", "=", $status)->
				orderBy('is_featured', 'DESC')->
				orderBy('created_at', 'DESC')->
				paginate(20);
		}
		elseif ($q != null && trim($q) != "") {
			$posts = EventPost::where("title", "LIKE", "%".$q."%")->
				orderBy('is_featured', 'DESC')->
				orderBy('created_at', 'DESC')->
				paginate(20);
		}
		elseif ($tag != null) {
			$posts = EventPost::whereHas("tags", function($query) {
				$query->where("name", "=", Request::input("tag"));
			})->orderBy('is_featured', 'DESC')->orderBy('created_at', 'DESC')->paginate(20);
		}
		elseif ($author != null) {
			$posts = EventPost::whereHas("author", function($query) {
				$query->where("username", "=", Request::input("author"));
			})->orderBy('is_featured', 'DESC')->orderBy('created_at', 'DESC')->paginate(20);
		}
		else {
			$posts = EventPost::orderBy('is_featured', 'DESC')->orderBy('created_at', 'DESC')->paginate(20);
		}
		
		return view("admin.blog-posts", array("posts" => $posts));
	}
	
	
	public function previewEventPost($id)
	{
		$post = EventPost::find($id);
		if (!$post) Redirect::route("admin-blog-posts");
		
		return view("admin.blog-post-preview", array("post" => $post));
	}
    
    public function livePreviewEventPost()
    {
        $post = array();
        $post["title"] = Request::input("title");
        $post["content"] = Request::input("content");
        return view("admin.blog-post-livepreview", array("post" => $post));
    }
	
	
	public function newEventPost()
	{
		return view("admin.blog-post-new");
	}
	
	
	public function createEventPost()
	{
		$validator = Validator::make(Request::all(), EventPost::save_rules(), EventPost::$custom_messages);
		
		if ($validator->passes()) {
			$post = new EventPost;
			$post->author()->associate(Auth::user());
			$post->title = trim(Request::input("title"));
			$post->url = trim(Request::input("url"));
			$post->feature_image_url = trim(Request::input("feature_image_url"));
			$post->description = trim(Request::input("description"));
			$post->content = Request::input("content");
			$post->status = Request::input("status");
			
			if ($post->save()) {
				$tags = Request::input("tags");
				$tags_id = array();
				if (trim($tags) != "") {
					$tags = preg_replace('/\s+/', ' ', trim($tags));
					$tags_array = explode(" ", $tags);
					foreach ($tags_array as $tag_name) {
						$tag = EventTag::where("name", "=", trim($tag_name))->first();
						if ($tag == null) {
							$tag = new EventTag;
							$tag->name = trim($tag_name);
							$tag->save();
						}
						array_push($tags_id, $tag->id);
					}
					$post->tags()->sync($tags_id);
				}
				
				return Redirect::route("admin-blog-posts")->with("success", "New post was created");
			} else {
				return Redirect::back()->with('error', 'Cannot save data')->withInput(Request::except("feature_image_url"));
			}
		}
		else {
			return Redirect::back()->with('error', 'Errors')->withErrors($validator)->withInput(Request::except("feature_image_url"));
		}
	}


	public function editEventPost($id)
	{
		// Check is exist
		$post = EventPost::find($id);
		if (!$post) return Redirect::route("admin-blog-posts");
		
		// Check if not admin role, and not author's item
		if (Auth::user()->role != "admin" && Auth::user()->id != $post->author->id) {
			return Redirect::route("admin-blog-posts");
		}
		
		$tags_str = "";
		foreach ($post->tags as $tag) {
			$tags_str.=$tag->name." ";
		}
		
		return view("admin.blog-post-edit", 
		    array(
                "post" => $post, 
                "tags_str" => $tags_str
            )
        );
	}
	
	
	public function updateEventPost($id)
	{
		// Check is exist
		$post = EventPost::find($id);
		if (!$post) return Redirect::route("admin-blog-posts")->with('error', 'Cannot save data');
		
		// Check if not admin role, and not author's item
		if (Auth::user()->role != "admin" && Auth::user()->id != $post->author->id) {
			return Redirect::route("admin-blog-posts")->with('error', 'Cannot save data');
		}
		
		$validator = Validator::make(Request::all(), EventPost::save_rules($id), EventPost::$custom_messages);
		
		if ($validator->passes()) {
	        $post->title = trim(Request::input("title"));
			$post->url = trim(Request::input("url"));
	        $post->feature_image_url = trim(Request::input("feature_image_url"));
	        $post->description = trim(Request::input("description"));
	        $post->content = Request::input("content");
			$post->status = Request::input("status");
			
	        if ($post->save()) {
	        	$tags = Request::input("tags");
	        	$tags_id = array();
				if (trim($tags) != "") {
					$tags = preg_replace('/\s+/', ' ', trim($tags));
					$tags_array = explode(" ", $tags);
					foreach ($tags_array as $tag_name) {
						$tag = EventTag::where("name", "=", trim($tag_name))->first();
						if ($tag == null) {
							$tag = new EventTag;
							$tag->name = trim($tag_name);
							$tag->save();
						}
						array_push($tags_id, $tag->id);
					}
					$post->tags()->sync($tags_id);
				}
				
	            return Redirect::route("admin-blog-posts")->with("success", "Updated post was saved");
	        } else {
	            return Redirect::back()->with('error', 'Cannot save data')->withInput(Request::except("feature_image_url"));;
	        }
		}
		else {
            return Redirect::back()->with('error', 'Errors')->withErrors($validator)->withInput(Request::except("feature_image_url"));;
        }
	}


	public function deleteEventPost($id)
	{
		// Check is exist
		$post = EventPost::find($id);
		if (!$post) return Redirect::route("admin-blog-posts")->with('error', 'Cannot delete data');
		
		// Check if not admin role, and not author's item
		if (Auth::user()->role != "admin" && Auth::user()->id != $post->author->id) {
			return Redirect::route("admin-blog-posts")->with('error', 'Cannot delete data');
		}
		
		$post->tags()->detach();
		$post->delete();
		
		if (Request::input("inpreview")) return Redirect::route("admin-blog-posts")->with("success", "Post was deleted");
		return Redirect::back()->with("success", "Post was deleted");
	}
	
	
	public function toggleFeaturedEventPost($id)
	{
		// Check is exist
		$post = EventPost::find($id);
		if (!$post) return Redirect::route("admin-blog-posts")->with('error', 'Cannot save data');
		
		$message = "Success";
		
		if (!$post->is_featured) {
			$post->is_featured = 1;
			$message = "Set featured post";
		} else {
			$post->is_featured = 0;
			$message = "Unset featured post";
		}
		
		if ($post->save()) {
			return Redirect::back()->with("success", $message);
		} else {
			return Redirect::back()->with('error', 'Cannot delete data');
		}
	}
	// ----------------------------------------Blog Posts----------------------------------------
	
	
	// ----------------------------------------Blog Tags----------------------------------------
	public function blogTags() {
		$q = Request::input("q");
        
        $tags = null;

        if ($q != null && trim($q) != "") {
            $tags = EventTag::where("name", "LIKE", "%".$q."%")->
            	orderBy('is_featured', 'DESC')->
                orderBy('created_at', 'DESC')->
                paginate(20);
        }
        else {
            $tags = EventTag::orderBy('is_featured', 'DESC')->orderBy('created_at', 'DESC')->paginate(20);
        }
		
		return view("admin.blog-tags", array("tags" => $tags));
	}
	
	
	public function deleteEventTag($id)
	{
		// Check is exist
		$tag = EventTag::find($id);
		if (!$tag) return Redirect::back()->with('error', 'Cannot delete data');
		
		$tag->posts()->detach();
		$tag->delete();
		
		return Redirect::back()->with("success", "Tag was deleted");
	}
	
	
	public function toggleFeaturedEventTag($id)
	{
		// Check is exist
		$tag = EventTag::find($id);
		if (!$tag) return Redirect::route("admin-blog-tags")->with('error', 'Cannot save data');
		
		$message = "Success";
		
		if (!$tag->is_featured) {
			$tag->is_featured = 1;
			$message = "Set featured tag";
		} else {
			$tag->is_featured = 0;
			$message = "Unset featured tag";
		}
		
		if ($tag->save()) {
			return Redirect::back()->with("success", $message);
		} else {
			return Redirect::back()->with('error', 'Cannot delete data');
		}
	}
	// ----------------------------------------Blog Tags----------------------------------------
	
}
