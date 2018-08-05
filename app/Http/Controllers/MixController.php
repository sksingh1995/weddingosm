<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MixController extends Controller
{
    
	/**
	 * check weather the email exists or not
	 * @param  Request $req 
	 * @return json
	 */
    public function checkEmailExists(Request $req)
    {
    	$count = User::where('email',$req->email)->count();

    	return response()->json(['exists'	=>	$count],200);
    }
}
