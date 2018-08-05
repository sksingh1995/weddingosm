<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerDashboard extends Controller
{

	/**
	 * show the view of customer dashboard
	 * @return view
	 */
	public function home()
	{
		return view('dashboard.customer.home');
	}
}
