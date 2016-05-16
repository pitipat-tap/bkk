<?php namespace App\Http\Controllers;

use Request;
use Validator;
use Auth;
use Redirect;
use Input;
use DB;

use App\Models\User;
use App\Models\BannerOrdit;

class AdminBannerController extends Controller {
	
	public function bannerOrdit()
	{
		$banners = BannerOrdit::orderBy('is_select', 'DESC')->get();
		
		return view("admin.bannerOrdit", array("banners" => $banners));
	}
	
}
