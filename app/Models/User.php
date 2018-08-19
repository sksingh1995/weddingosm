<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('active', function (Builder $builder) {
            $builder->where('active',1);
        });
    }

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

    
    /**
     * query scope to make sure vendor has can be listed
     * @param  model instance $query User model query instance
     * @return model   
     */
    public function scopeIsVendor($query)
    {
        return $query->where('user_type',env('VENDOR_USER_TYPE'))->whereHas('vendorProfile', function($q){
            $q->where([
                'verified_by_admin' => 1,
                'is_available'  =>  1,
            ])->where('registration_completed_step','>=',3);
        });
    }


}
