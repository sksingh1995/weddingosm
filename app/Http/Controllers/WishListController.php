<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishListController extends Controller
{

    /**
     * shows the wishlist view
     * @return view
     */
    public function index()
    {
        return view('wishlist.home');
    }
}
