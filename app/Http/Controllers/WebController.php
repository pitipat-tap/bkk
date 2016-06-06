<?php namespace App\Http\Controllers;

use Redirect;
use Request;
use Validator;
use Response;

use App\Models\Attractions;


class WebController extends Controller {
    public function accommodation() {
        $posts = Attractions::where("is_accommodation", "=", "1")->
            orderBy('created_at', 'DESC')->
            paginate(5);
        
        return view('web.accommodation', array("posts" => $posts));
    }

    public function accommodationPost($id) {

        $post = Attractions::find($id);
        if($post){
            return view("web.accommodation-post", 
                array(
                    "post" => $post
                )
            );
        }
        return Redirect::route("accommodation");
    }

    public function accommodationJson() {
        $posts = Attractions::where("is_accommodation", "=", "1")->
            orderBy('created_at', 'DESC')->
            paginate(5);
        return Response::json($arrayName = array('status' => 200, 'posts'=>$posts->toArray()));
    }
}
