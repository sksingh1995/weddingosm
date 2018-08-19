<?php

use App\Models\City;
use App\Models\Service;
use App\Models\User as Vendor;
use Faker\Generator as Faker;

$factory->define(Vendor::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'phone' => 9015470425,
		'password' => bcrypt(111111),
		'avatar' => config('params.avatar_placeholder'),
		'referral_code' => getReferralCode(),
		'active' => 1,
	];
});

$factory->afterCreating(Vendor::class, function ($user, $faker) {
	$user->user_type = env('VENDOR_USER_TYPE');
	$user->email = strtolower(str_replace(' ', '_', $user->name).'@yopmail.com');
	$user->save();

	$user->vendorProfile()->create([
		'business_name' => Service::find(mt_rand(1,Service::where('id','<=',4)->count()))->service_name,
		'about_business' => $faker->paragraph,
		'country_id' => 1,
		'service_id' => mt_rand(1,Service::where('id','<=',4)->count()),
		'verified_by_admin' => 1,
		'registration_completed_step' => 3,
		'city_id' => mt_rand(1,City::where('id','<=',4)->count()),
	]);
});
