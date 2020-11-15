<?php

namespace App\Http\Controllers;

class HomeController extends Controller {


	function showAbout(){
		return view('about');
	}

	function showShop(){
		return view('shop');
	}

	function showGallery(){
		return view('gallery');
	}	

	function showContact(){
		return view('contact');
	}
}