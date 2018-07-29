<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

	/**
	 * show view of landing page
	 * @return view
	 */
	public function welcome()
	{
		return view('home.welcome');
	}
}
