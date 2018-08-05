<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * relationship between users and vendor_profiles
     * @return collection
     */
    public function vendorProfile()
    {
        return $this->hasOne("App\Models\VendorProfile","user_id","id");
    }

    
    /**
     * relationship between users and customer_profiles
     * @return collection
     */
    public function customerProfile()
    {
        return $this->hasOne("App\Models\CustomerProfile","customer_id","id");
    }


}
