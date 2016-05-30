<?php 
namespace App\Http\Controllers;

use Request;
use Validator;
use Auth;
use Redirect;

use App\Models\User;
use App\Models\BannerOrbit;

class AdminBannerController extends Controller {
	
	// ----------------------------------------Image Posts----------------------------------------
	public function banners(){
		$banners = BannerOrbit::orderBy('sequence', 'ASC')->get();
		return view("admin.banners", array(
				"banners" => $banners
			));
	}

	public function newBanner(){
		return view("admin.banner-new");
	}

	public function createBanner()
	{
		$validator = Validator::make(Request::all(), BannerOrbit::$save_rules, BannerOrbit::$custom_messages);
		
		if ($validator->passes()) {
			$banner = new BannerOrbit;
			$banner->author()->associate(Auth::user());
			$banner->name = trim(Request::input("name"));
			$banner->caption = trim(Request::input("caption"));
			$banner->link_url = trim(Request::input("link_url"));
			$banner->desktop_image_url = trim(Request::input("desktop_image_url"));
			$banner->tablet_image_url = trim(Request::input("tablet_image_url"));
			$banner->mobile_image_url = trim(Request::input("mobile_image_url"));
			$banner->sequence =  BannerOrbit::count()+1;
			
			if ($banner->save()) {
				return Redirect::route("admin-banners")->with("success", "New banner was created");
			} else {
				return Redirect::back()->with('error', 'Cannot save data')->withInput(Request::except("image_url"));
			}
		}
		else {
			return Redirect::back()->with('error', 'Errors')->withErrors($validator)->withInput(Request::except("image_url"));
		}
	}

	public function editBanner($id)
	{
		// Check is exist
		$banner = BannerOrbit::find($id);
		if (!$banner) return Redirect::route("admin-banners");
		
		// Check if not admin role, and not author's item
		if (Auth::user()->role != "admin" || Auth::user()->id != $banner->author->id) {
			return Redirect::route("admin-banners");
		}
		
		return view("admin.banner-edit", 
		    array(
                "banner" => $banner
            )
        );
	}

	public function updateBanner($id)
	{
		// Check is exist
		$banner = BannerOrbit::find($id);
		if (!$banner) return Redirect::route("admin-attractions")->with('error', 'Cannot save data');
		
		// Check if not admin role, and not author's item
		if (Auth::user()->role != "admin" && Auth::user()->id != $banner->author->id) {
			return Redirect::route("admin-banners")->with('error', 'Cannot save data');
		}

		$validator = Validator::make(Request::all(), BannerOrbit::$save_rules, BannerOrbit::$custom_messages);
		
		if ($validator->passes()) {
			$banner->name = trim(Request::input("name"));
			$banner->caption = trim(Request::input("caption"));
			$banner->link_url = trim(Request::input("link_url"));
			$banner->desktop_image_url = trim(Request::input("desktop_image_url"));
			$banner->tablet_image_url = trim(Request::input("tablet_image_url"));
			$banner->mobile_image_url = trim(Request::input("mobile_image_url"));
			
	        if ($banner->save()) {
	            return Redirect::route("admin-banners")->with("success", "Updated Banner was saved");
	        } else {
	            return Redirect::back()->with('error', 'Cannot save data')->withInput();
	        }
		}
		else {
            return Redirect::back()->with('error', 'Errors')->withErrors($validator)->withInput();
        }
	}

	public function moveUpBanner($id){

		$banner1 = BannerOrbit::find($id);
		$banner2 = BannerOrbit::where('sequence', '<' ,$banner1->sequence)->orderBy('sequence', 'DESC')->first();
		if (!$banner1 || !$banner2)
			return Redirect::route("admin-banners")->with('error', 'Cannot edit data');

		$banner1->sequence -= 1;
		$banner2->sequence += 1;

		$banner1->save();
		$banner2->save();

		return Redirect::route("admin-banners")->with('error', 'Cannot edit data');
	}

	public function moveDownBanner($id){

		$banner1 = BannerOrbit::find($id);
		$banner2 = BannerOrbit::where('sequence', '>' ,$banner1->sequence)->orderBy('sequence', 'ASC')->first();
		if (!$banner1 || !$banner2)
			return Redirect::route("admin-banners")->with('error', 'Cannot edit data');

		$banner1->sequence += 1;
		$banner2->sequence -= 1;

		$banner1->save();
		$banner2->save();

		return Redirect::route("admin-banners")->with('error', 'Cannot edit data');
	}

	public function deleteBanner($id)
	{
		// Check is exist
		$banner = BannerOrbit::find($id);
		if (!$banner) return Redirect::back()->with('error', 'Cannot delete data');
		
		// Check if not admin role, and not author's item
		if (Auth::user()->role != "admin" || Auth::user()->id != $banner->author->id) {
			return Redirect::back()->with('error', 'Cannot delete data');
		}

		$banners = BannerOrbit::where('sequence', '>' ,$banner->sequence)->get();
		foreach ($banners as  $temp) {
			$temp->sequence -= 1;
			$temp->save();
		}

		$banner->delete();
		return Redirect::back()->with('success', 'Baner was deleted');
	}
}
