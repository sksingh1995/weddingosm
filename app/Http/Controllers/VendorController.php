<?php

namespace App\Http\Controllers;

use App\Mail\SignUpVerficationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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

    /**
     * show the view of vendor registration page
     * @return view
     */
    public function register()
    {
        return view('auth.vendor.register');
    }

    protected function getReferralCode()
    {
        $prefix = 'WEDOSM';
        return mt_rand(1000, 99999);
    }

    /**
     * create a new vendor user
     * @param Request $req
     * @return void
     */
    public function postRegister(Request $req)
    {
        // $validator = Validator::make($req->all(),[
        //     'name'  =>  'required',
        //     'email'  =>  'required|email|unique:users',
        //     'phone'  =>  'required|numeric',
        //     'password'  =>  'required|min:6',
        //     'user_type'  =>  [
        //         'required',
        //         Rule::in(['customer', 'vendor']),
        //     ],
        // ],[
        //     'email.unique'  =>  'email address is already taken',
        //     'user_type.required' => 'please select a user type',
        //     'user_type.in' => 'please select a role',
        // ]);

        // if($validator->fails()){
        //     return response()->json([
        //         'status'    =>  false,
        //         'error'     =>  $validator->errors()->all()[0]
        //     ]);
        // }

        // $user = new User;

        // $user->name = $req->name;
        // $user->email = $req->email;
        // $user->phone = $req->phone;
        // $user->password = $req->password;
        // $user->user_type = $req->user_type;
        // $user->token = $req->user_type;


        // Mail::to($req->email)->send(new SignUpVerficationMail($user));

        // return $this->getReferralCode();
    }

}
