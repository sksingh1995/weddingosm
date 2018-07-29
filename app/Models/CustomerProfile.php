<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerProfile extends Model
{

	public $timestamps = false;

	protected $fillable = ['customer_id','gender','country_id','city_id'];

}
