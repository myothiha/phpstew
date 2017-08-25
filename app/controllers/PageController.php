<?php

namespace App\Controllers;

use App\Core\App;


class PageController {

	public function index()
	{
		

		// $tasks = App::get('query')->selectAll("tasks","Task");
		// die('hilo');

		return view('index');
	}

	public function about()
	{
		
		return view('about');
	}

	public function contact()
	{

		return view('contact');

	}

	public function aboutCulture()
	{
		
		$name = "Say Lab";

		return view('about-culture');

	}

}