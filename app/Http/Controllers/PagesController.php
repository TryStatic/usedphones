<?php

namespace App\Http\Controllers;


class PagesController extends Controller {
	/*	--- Typical Controller procedure --- 
		# process variable data or params
		# talk to the model
		# recieve from the model
		# compile or proccess data from the model if needed
		# pass that data to the correct view
	*/
	public function getHome() {
		$featured = ListingsController::getFourRandomFeatured();
		return view('home')->withFeatured($featured);
	}

	public function getAbout() {
		return view('pages/about');
	}

	public function getFAQ() {
		return view('pages/faq');
	}

	public function getSupport() {
		return view('pages/support');
	}

}