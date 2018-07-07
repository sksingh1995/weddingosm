<?php

namespace App\Http\Controllers;

use App\Mail\SignUpVerficationMail;
use App\Models\City;
use App\Models\Country;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
