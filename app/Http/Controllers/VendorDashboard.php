<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorDashboard extends Controller
{

	/**
	 * show the view of vendor dashboard
	 * @return view
	 */
	public function home()
	{
		return view('dashboard.vendor.home');
	}
}
