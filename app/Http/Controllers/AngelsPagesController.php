<?php

namespace App\Http\Controllers;

class AngelsPagesController extends Controller{

	public function getIndex(){
		return view('pages.welcome');
		#return view('pages/welcome'); either slash or period works!
		#return "La Casa Page";
		# process variable data or params
		# talk to the model
		# receive (data) from the model
		# compile or process data (again) from the model if needed
		# pass that data to the correct view
	}

	public function getAbout(){
		$first='Angel';
		$last='Amigon'; #careful! '' is different than ""!
		$fullname=$first . " " . $last;
		$email='angelworkemail@yahoo.com';
		$data=[];
		$data['email']=$email;
		$data['fullname']=$fullname;
		return view('pages.about')->withData($data);
		#return "about moi";
		#return view('pages.about')->withFullname($fullname)->withEmail($email);#short way
		#return view('pages.about')-> with("fullname", $fullname); this is the long way#or pages/about
		#??? why does fullName NOT work? but fullname is ok?
		#spacing is kind of important... ->MUST NOT have spaces in between
	}

	public function getContact(){
		#return "Hello, This is Contact Page";
		return view('pages.contact'); #or pages/contact
	}
}