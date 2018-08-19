<?php

/**
 * return a random code prefixing app name to use as a referral code
 * @return string referral code for vendors
 */

function getReferralCode(){
	return env('APP_NAME') . '_' . mt_rand(11111, 99999999);
}

/**
 * return the service id using a service name from cache
 * @param  string $key service name
 * @return int
 */
function getServiceIdByKey($key){
	// dd($key);
	$service = array_first(config(config('params.csc_cache').'.services'), function ($value, $k) use($key) {
		return $value['url_name'] == $key;
	});

	if($service){
		return $service['id'];
	}

	return null;
}


/**
 * return the city id using a city name from cache
 * @param  string $key service name
 * @return int
 */
function getCityIdByKey($key){

	$city = array_first(config(config('params.csc_cache').'.cities'), function ($value, $k) use($key) {
		return $value['url_name'] == $key;
	});

	if($city){
		return $city['id'];
	}

	return null;
}


function sliceString($string, $length = 100)
{
	$chunk = substr($string, 0,$length);

	return substr($chunk, 0, strrpos($chunk,' '));
}