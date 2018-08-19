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
     * shows the list of vendors matches in search criteria
     * @return view
     */
    public function listVendors($location = 'all', $service = null)
    {
        $query = User::query();

        if($service != null){
            $query->whereHas('vendorProfile', function($q) use($service){
                $q->where('service_id',getServiceIdByKey($service));
            });

        }

        if($location != 'all'){
            $query->whereHas('vendorProfile', function($q) use($location){
                $q->where('city_id',getCityIdByKey($location));
            });
        }

        $vendors = $query->isVendor()->paginate(config('params.vendor_per_page'));

        // dd($vendors->count());

        return view('vendor.vendors',compact('vendors','location','service'));
    }


    /**
     * show the view of vendor detail page
     * @return view
     */
    public function vendorDetail($service, $id)
    {
        return view('vendor.vendor-detail');
    }

}
