<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorProfile extends Model
{
    public $timestamps = false;

    protected $fillable = ['business_name','about_business','country_id','city_id','photos'];
}