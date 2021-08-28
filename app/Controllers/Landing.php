<?php

namespace App\Controllers;

class Landing extends BaseController
{
	public function index()
	{
		return view('landing');
	}

	public function posts()
	{
		return view('posts');
	}

	public function contact()
	{
		return view('contact');
	}
}