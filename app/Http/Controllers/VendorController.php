<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * show the view of vendors
     * @return view
     */
    public function vendors()
    {
        return view('vendor.vendors');
    }


    /**
     * show the view of vendor detail page
     * @return view
     */
    public function vendorDetail()
    {
        return view('vendor.vendor-detail');
    }
}
