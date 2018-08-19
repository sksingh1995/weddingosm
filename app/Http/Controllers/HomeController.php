<?php

namespace App\Http\Controllers;

use App\Models\User;
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
