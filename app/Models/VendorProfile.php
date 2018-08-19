<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorProfile extends Model
{
	public $timestamps = false;

	protected $table = 'vendor_profiles';

	protected $fillable = ['business_name', 'service_id', 'about_business', 'country_id', 'city_id', 'photos'];

	/**
	 * inverse one to one relationship between vendor profile and service
	 * @return collection
	 */
	public function service()
	{
		return $this->belongsTo('App\Models\Service', 'service_id', 'id');
	}

	/**
	 * return the service name in url format
	 * @return string
	 */
	public function serviceUrl()
	{
		return str_replace(' ', '-', $this->service->service_name);
	}

	/**
	 * return the business name in url format
	 * @return string
	 */
	public function businessNameUrl()
	{
		return str_replace(' ', '-', $this->business_name).'-'.$this->id;
	}

	/**
	 * inverse one to one relationship between vendor profile and city
	 * @return collection
	 */
	public function city()
	{
		return $this->belongsTo('App\Models\City', 'city_id', 'id');
	}
	
}
