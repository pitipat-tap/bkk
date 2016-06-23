<?php namespace App\Http\Controllers;

use Redirect;
use Request;
use Validator;
use Response;

use App\Models\Attractions;
use App\Models\BannerOrbit;
use App\Models\ImagePost;
use App\Models\EventPost;

class WebController extends Controller {

    public function home() {
        $banners = BannerOrbit::orderBy('sequence', 'ASC')->get();
        $events = [];
        $janEvent = Attractions::where("opening_hours","LIKE","%jan%")->where("is_event",1)->orderBy('updated_at', 'desc')->first();
        $febEvent = Attractions::where("opening_hours","LIKE","%feb%")->where("is_event",1)->orderBy('updated_at', 'desc')->first();
        $marEvent = Attractions::where("opening_hours","LIKE","%march%")->where("is_event",1)->orderBy('updated_at', 'desc')->first();
        $aprEvent = Attractions::where("opening_hours","LIKE","%april%")->where("is_event",1)->orderBy('updated_at', 'desc')->first();
        $mayEvent = Attractions::where("opening_hours","LIKE","%may%")->where("is_event",1)->orderBy('updated_at', 'desc')->first();
        $junEvent = Attractions::where("opening_hours","LIKE","%june%")->where("is_event",1)->orderBy('updated_at', 'desc')->first();
        $julEvent = Attractions::where("opening_hours","LIKE","%jul%")->where("is_event",1)->orderBy('updated_at', 'desc')->first();
        $augEvent = Attractions::where("opening_hours","LIKE","%aug%")->where("is_event",1)->orderBy('updated_at', 'desc')->first();
        $sepEvent = Attractions::where("opening_hours","LIKE","%sep%")->where("is_event",1)->orderBy('updated_at', 'desc')->first();
        $octEvent = Attractions::where("opening_hours","LIKE","%oct%")->where("is_event",1)->orderBy('updated_at', 'desc')->first();
        $novEvent = Attractions::where("opening_hours","LIKE","%novem%")->where("is_event",1)->orderBy('updated_at', 'desc')->first();
        $decEvent = Attractions::where("opening_hours","LIKE","%dec%")->where("is_event",1)->orderBy('updated_at', 'desc')->first();
     
        if(!$janEvent){      
            $janEvent = new Attractions;
        }
        $janEvent->month = "january";
        array_push($events, $janEvent);

        if(!$febEvent){    
            $febEvent = new Attractions;
        }
        $febEvent->month = "febuary";
        array_push($events, $febEvent);

        if(!$marEvent){
            $marEvent = new Attractions;
        }
        $marEvent->month = "march";
        array_push($events, $marEvent);

        if(!$aprEvent){
            $aprEvent = new Attractions;
        }
        $aprEvent->month = "april";
        array_push($events, $aprEvent);

        if(!$mayEvent){
            $mayEvent = new Attractions;
        }
        $mayEvent->month = "may";
        array_push($events, $mayEvent);

        if(!$junEvent){
            $junEvent = new Attractions;
        }
        $junEvent->month = "june";
        array_push($events, $junEvent);
        
        if(!$julEvent){
            $julEvent = new Attractions;
        }
        $julEvent->month = "july";
        array_push($events, $julEvent);
        
        if(!$augEvent){
            $augEvent = new Attractions;
        }
        $augEvent->month = "august";
        array_push($events, $augEvent);
        
        if(!$sepEvent){
            $sepEvent = new Attractions;
        }
        $sepEvent->month = "september";
        array_push($events, $sepEvent);
        
        if(!$octEvent){
            $octEvent = new Attractions;
        }
        $octEvent->month = "october";
        array_push($events, $octEvent);
        
        if(!$novEvent){
            $novEvent = new Attractions;
        }
        $novEvent->month = "november";
        array_push($events, $novEvent);
        
        if(!$decEvent){
            $decEvent = new Attractions;
        }
        $decEvent->month = "december";
        array_push($events, $decEvent);

         $posts = EventPost::where("status", "=", "published")->
                  orderBy('is_featured', 'DESC')->
                  orderBy('created_at', 'DESC')->
                  paginate(2);

        return view('web/home',array(
                    "banners" => $banners,
                    "events" => $events,
                    "posts" => $posts,
                ));
    }
    public function news(){
        $posts = EventPost::orderBy('created_at', 'DESC')->
                 paginate(10);
        return view('web.news', array("posts" => $posts));
    }
    public function blogPost($url)
    {
        $post = EventPost::where("url", "=", $url)->first();
        if (!$post) App::abort(404);

            $post->hits += 1;
            $post->timestamps = false;
            $post->save();
                                    
            $prev_post = EventPost::where("status", "=", "published")->
            where("created_at", "<", $post->created_at)->
            orderBy("created_at", "DESC")->
            take(3)->get();
    
            return view("web.news-post", array(
                        "post" => $post,
                        "prev_post" => $prev_post
                    )
            );
    }

    public function attractionSelect($category){
        $attractions = Attractions::where("category",$category)->orderBy('priority','ASC')->paginate(5);
        $title = "";
        if($category == 'arts_and_culture'){
            $title = 'Art And Culture';
        }else if($category == 'food_and_drink'){
            $title = 'Food And Drink';
        }else if($category == 'parks_and_gardens'){
            $title = 'Parks And Gardens';
        }else if($category == 'events'){
            $title = 'Events';
        }else if($category == 'shopping'){
            $title = 'Shopping';
        }
        return view('web/attraction-select',array(
            "attractions" => $attractions,
            "title" => $title,
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
        $images = ImagePost::paginate(20);
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

    public function oneDayTrip2(){
        return view('web/one-day-trip-2');
    }

    public function sitemap(){
        return view('web/sitemap');
    }

    public function attractionJson() {
        $posts = Attractions::where("is_attraction", "1")->
            orderBy('created_at', 'DESC')->
            paginate(5);
        return Response::json($arrayName = array('status' => 200, 'posts'=>$posts->toArray()));
    }
}
