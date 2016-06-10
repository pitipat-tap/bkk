<?php namespace App\Http\Controllers;

use Redirect;
use Request;
use Validator;
use Response;

use App\Models\Attractions;
use App\Models\BannerOrbit;
use App\Models\ImagePost;

class WebController extends Controller {

    public function home() {
        $banners = BannerOrbit::orderBy('sequence', 'ASC')->get();
        return view('web/home',array(
                    "banners" => $banners
                ));
    }

    public function attractionSelect($category){
        $attractions = Attractions::where("category",$category)->paginate(5);
        return view('web/attraction-select',array(
            "attractions" => $attractions,
        ));
    }
    public function attractionCategory() {
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
    }
    public function attraction($id) {
        $attraction = Attractions::find($id);
        if(!$attraction){
            return redirect("/attraction-category");
        }
        return view('web/attraction',array(
            "attraction" => $attraction,
        ));
    }

    public function accommodation() {
        $accommodations = Attractions::where("is_accommodation","1")->
            orderBy('priority', 'ASC')->orderBy('created_at','ASC')->
            paginate(5);
        
        return view('web.accommodation', array("accommodations" => $accommodations));
    }

    public function accommodationPost($id) {

        $accommodations= Attractions::where('id',$id)->where('is_accommodation',1)->first();
        if($accommodations){
            return view("web.accommodation-post", 
                array(
                    "accommodation" => $accommodations
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

    public function transportation (){
        return view('web/transportation');
    }

    public function gallery(){
        $images = ImagePost::paginate(12);
        return view('web/gallery',
                array(
                    "images" => $images
                )
        );
    }

    public function galleryLoadMore() {
        $images = ImagePost::paginate(8);
        return Response::json(
            array(
                'status' => 200,
                'moreImages' => $images->toArray()
            )
        );
    }

    public function aboutUs(){
        return view('web/aboutUs');
    }

    public function usefulInfo() {
        return view('web/useful-info');
    }

    public function partners() {
        return view('web/partners');
    }
    
    public function faq() {
        return view('web/faq');
    }

    public function trips(){
        return view('web/trips');
    }

    public function trip(){
        return view('web/trip');
    }

    public function oneDayTrip(){
        return view('web/one-day-trip');
    }


    public function attractionJson() {
        $posts = Attractions::where("is_attraction", "1")->
            orderBy('created_at', 'DESC')->
            paginate(5);
        return Response::json($arrayName = array('status' => 200, 'posts'=>$posts->toArray()));
    }
}
