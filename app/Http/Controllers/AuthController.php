<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Mail\SignUpVerficationMail;
use App\Models\City;
use App\Models\Country;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    
    /**
     * shows the view of login page
     * @return view
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * authenticate and login user with credentials
     * @param Request $req
     * @return void
     */
    public function postLogin(Request $req)
    {
        try {
            
            $validator = Validator::make($req->all(),[
                'email'  =>  'required|email',
                'password'  =>  'required',
            ]);

            if($validator->fails()){
                return response()->json([
                    'status'    =>  false,
                    'error'     =>  $validator->errors()->all()[0]
                ]);
            }

            $user = User::whereEmail($req->email)->first();

            if(!$user || !Hash::check($req->password,$user->password)){
                return response()->json(['status'   =>  false,'error'  => 'Invalid Credential'],200);   
            }

            if($user->active == 0){
                return response()->json(['status'   =>  false,'error'  => 'Please verify your account by visiting your email to login'],200);   
            }

            return response()->json(['status'   =>  true,'message'  => 'login successfull'],200);
        } catch (\Exception $e) {
            return response()->json(['status'   =>  false,'error'  =>  $e->getMessage()],200);
        }
    }


    /**
     * shows the view of customer registeration page
     * @return view
     */
    public function customerRegister()
    {
        return view('auth.customer.register');
    }


    /**
     * creates a new customer user
     * @param Request $req
     * @return void
     */
    public function postCustomerRegister(Request $req)
    {
        try {
            $validator = Validator::make($req->all(),[
                'name'  =>  'required',
                'email'  =>  'required|email|unique:users',
                'phone'  =>  'required|numeric',
                'password'  =>  'required|min:8',
            ],[
                'email.unique'  =>  'email address is already taken',
                'email.exists'  =>  'please choose a valid city',
            ]);

            if($validator->fails()){
                return response()->json([
                    'status'    =>  false,
                    'error'     =>  $validator->errors()->all()[0]
                ]);
            }

            // create vendor
            $user = new User;

            $user->name = $req->name;
            $user->email = $req->email;
            $user->phone = $req->phone;
            $user->password = bcrypt($req->password);
            $user->token = md5($req->email.time());
            $user->verified_by_admin = 1;
            $user->user_type = env('CUSTOMER_USER_TYPE');
            $user->save();

            // send email for verfication
            Mail::to($req->email)->send(new SignUpVerficationMail($user,route('customer.email_verification',$user->token)));
            return response()->json(['status'   =>  true,'message'  =>  'Account Created. Please check your email to verify your account.'],201);
        } catch (\Exception $e) {
            return response()->json(['status'   =>  false,'error'  =>  $e->getMessage()],200);
        }
    }

       /**
     * verifies newly register vendor when he clicks the link received 
     * on email
     * @param  string $token token to verify users email
     * @return void
     */
    public function customerEmailVerification($token)
    {
        if(!$token){
            return abort(404);
        }

        $user = User::whereToken($token)->where('user_type',env('CUSTOMER_USER_TYPE'))->first(['id','name','email','phone','token']);

        if(!$user){
            return abort(404);
        }

        $user->token = null;
        $user->active = 1;
        $user->save();

        return redirect()->route('home');
    }

    /**
     * show the view of vendor registration page
     * @return view
     */
    public function vendorRegister()
    {
        $services = Service::orderBy('service_name','ASC')->get(['id','service_name as name'])->toArray();
        $cities = City::orderBy('city_name','ASC')->get(['id','city_name as name'])->toArray();

        $countries = Country::orderBy('country_name','ASC')->get(['id','country_name as name'])->toArray();
    
        return view('auth.vendor.register',compact('services','cities','countries'));
    }

    /**
     * create a new vendor user
     * @param Request $req
     * @return void
     */
    public function vendorPostRegister(Request $req)
    {
        try {
            $validator = Validator::make($req->all(),[
                'bn'  =>  'required',
                'name'  =>  'required',
                'email'  =>  'required|email|unique:users',
                'city'  =>  'required|exists:cities,id',
                'service'  =>  'required|exists:services,id',
                'phone'  =>  'required|numeric',
                'password'  =>  'required|min:8',
            ],[
                'bn.required'  =>  'business name is required',
                'email.unique'  =>  'email address is already taken',
                'email.exists'  =>  'please choose a valid city',
                'service.exists'  =>  'please choose a valid service',
            ]);

            if($validator->fails()){
                return response()->json([
                    'status'    =>  false,
                    'error'     =>  $validator->errors()->all()[0]
                ]);
            }

            // create vendor
            $user = new User;

            $user->name = $req->name;
            $user->email = $req->email;
            $user->phone = $req->phone;
            $user->password = bcrypt($req->password);
            $user->token = md5($req->email.time());
            $user->referral_code = env('APP_NAME').'_'.mt_rand(11111,99999999);
            $user->user_type = env('VENDOR_USER_TYPE');
            $user->save();

            //save vendor profile
                
            $user->vendorProfile()->create([
                'business_name' =>  $req->bn,
                'about_business' =>  $req->bd,
                'country_id' =>  1,
                'city_id' =>  $req->city,
            ]);
            
            // send email for verfication
            
            Mail::to($req->email)->send(new SignUpVerficationMail($user,route('vendor.email_verification',$user->token)));
            return response()->json(['status'   =>  true,'message'  =>  'vendor registered'],201);
        } catch (\Exception $e) {
            return response()->json(['status'   =>  false,'error'  =>  $e->getMessage()],200);
        }
    }

    /**
     * verifies newly register vendor when he clicks the link received 
     * on email
     * @param  string $token token to verify users email
     * @return void
     */
    public function vendorEmailVerification($token)
    {
        if(!$token){
            return abort(404);
        }

        $user = User::whereToken($token)->where('user_type',env('VENDOR_USER_TYPE'))->first(['id','name','email','phone','token']);

        if(!$user || $user->active == 1){
            return abort(404);
        }

        $user->active = 1;
        $user->save();

        return view('auth.vendor.faq',compact('user'));
    }


    /**
     * shows photo gallery view to upload photos  
     * @param  string $token token to verify user
     * @return view
     */
    public function vendorPhotoGallery($token)
    {
        if(!$token){
            return abort(404);
        }

        $user = User::whereToken($token)->where('user_type',env('VENDOR_USER_TYPE'))->first(['id','token']);

        if(!$user || $user->vendorProfile->faq_completed == 1){
            return abort(404);
        }

        return view('auth.vendor.photo_gallery',compact('user'));
    }

    /**
     * shows photo gallery view to upload photos  
     * @param  string $token token to verify user
     * @return view
     */
    public function saveVendorPhotoGallery(Request $req)
    {

        try {
       
            $rules = array(
                'files' => 'required|array',
                'user'  =>  'required'
            );

            $validator = Validator::make($req->all(), $rules);

            if ($validator->fails())
            {
                return response()->json([
                    'status'   =>  false, 
                    'error'  =>  $validator->errors()->all()[0]    
                ], 200);
            }

            $user = User::find($req->user);

            if(!$user){
                return response()->json(['status'   =>  false],200);
            }   

            $files = $req->file('files');

            if($files){

                $path = 'uploads/vendor/';

                if(!file_exists(public_path($path))){
                    mkdir(public_path($path,0777));
                }

                $uploaded_files = '';

                foreach ($files as $key => $file) {
                    $filename = time().'_'.$file->getClientOriginalName();
                   $file->move($path,$filename);

                   $uploaded_files .= ','.$path.$filename;
                }

               $user->vendorProfile()->update([
                    'photos'    =>  trim($uploaded_files,',')
               ]);

               return response()->json(['status'   =>  true],201);
            }

           return response()->json(['error'   =>  'something went wrong'],200);
        } catch (\Exception $e) {
           return response()->json(['error'   =>  $e->getMessage()],200);
        }
        
    }

    /**
     * called when vendor user completed photo upload step after fresh
     * sign up, then it removes the verfication token from user, so 
     * that user cannot acccess the page again.
     * @param  Request $req
     * @return json
     */
    public function galleryUploadFinish(Request $req)
    {
        try {
            $token = $req->query('token');

            if(!$token){
                return response()->json(['status'   =>  false],200);
            }

            $user = User::whereToken($token)->first();
            
            if(!$user){
                return response()->json(['status'   =>  false],200);
            }


            $user->token = null;
            $user->save();

            $user->vendorProfile()->update([
                'faq_completed'   =>  1
            ]);

            return response()->json(['status'   =>  true],200);            
        } catch (\Exception $e) {
            return response()->json(['status'   =>  true],200);
        }
    }    


    /**
     * sends a password reset link to users email to reset the 
     * password, if user exists 
     * @param  Request $req
     * @return json
     */
    public function sendResetPasswordLink(Request $req)
    {
        try {

            if(!$req->email){
                return response()->json(['status'   =>  false,'error' =>  'Please enter your email address registered with us'],200);
            }

            $user = User::where([
                'email' =>  $req->email,
                'active' =>  1,
                'verified_by_admin' =>  1,
            ])->first();
            
            if($user){

                // create the token
                $token = md5($req->email.time());

                // send password reset link to the email
                Mail::to($req->email)->send(new ForgotPasswordMail($user,route('password.reset',$token)));

                // save the token
                $user->token = $token;
                $user->save();

            }

            return response()->json(['status'   =>  true,'message'  =>  'You will shortly get an email if you are registered in the system'],200);            
        } catch (\Exception $e) {
            return response()->json(['status'   =>  false,'error'   =>  $e->getMessage()],200);
        }
    }


    /**
     * shows the reset password form view to user after validating
     * token 
     * @param string $token token to verify user
     * @return view
     */
    public function resetPassword($token)
    {
        try {
            if(!$token){
                return abort(404);
            }

            $user = User::whereToken($token)->first();

            if(!$user){
                return abort(404);
            }

            return view('auth.password_reset',compact('token'));
            
        } catch (\Exception $e) {
            // dd($e->getMessage());
            abort(404);
        }
    }

    /**
     * resets the user password
     * @param Request $req
     * @return json
     */
    public function postResetPassword(Request $req)
    {
        try {   

            $validator = Validator::make($req->all(),[
                'password'  =>  'required|min:8',
                'cnf_password'  =>  'required|same:password',
            ],[
                'cnf_password.required' =>  'confirm password field cannot left blank',
                'cnf_password.same' =>  'confirm password field must be same as password',
            ]);

            if($validator->fails()){
                return response()->json([
                    'status'   =>  false,
                    'error'   =>  $validator->errors()->all()[0]
                ]);
            }


            $user = User::whereToken($req->token)->first();

            if(!$user){
                return response()->json([
                    'status'   =>  false,
                    'error'   =>  'something went wrong. please try again'
                ]);
            }

            $user->password = bcrypt($req->password);
            $user->token = null;
            $user->save();

           return response()->json([
                'status'   =>  true,
                'message'   =>  'password reset successfull'
            ]);
            
        } catch (\Exception $e) {
           return response()->json([
                'status'   =>  false,
                'error'   =>  $e->getMessage()
            ]);
        }
    }
}
