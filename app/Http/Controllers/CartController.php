<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

    /**
     * shows the view of cart page
     * @return view
     */
    public function index()
    {
        return view('cart.index');
    }
}
