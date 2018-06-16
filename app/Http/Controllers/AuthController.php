<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * shows the view of customer login page
     * @return view
     */
    public function customerLogin()
    {
        return view('auth.login');
    }


    /**
     * shows the view of customer registeration page
     * @return view
     */
    public function customerRegister()
    {
        return view('auth.register');
    }
}
