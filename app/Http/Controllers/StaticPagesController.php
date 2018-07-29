<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    /**
     * show the gallery view
     * @return view
     */
    public function gallery()
    {
        return view('static.gallery');
    }


    /**
     * show the about us view
     * @return view
     */
    public function aboutUs()
    {
        return view('static.about-us');
    }

    /**
     * show the contact us view
     * @return view
     */
    public function contactUs()
    {
        return view('static.contact-us');
    }


    public function shopping()
    {
        return view('static.shopping');
    }
}
