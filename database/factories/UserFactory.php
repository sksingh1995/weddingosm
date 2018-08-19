<?php

use App\Models\City;
use App\Models\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(User::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'phone' => 9015470425,
		'password' => bcrypt(111111),
		'avatar' => config('params.avatar_placeholder'),
		'active' => 1,
	];
});

$factory->afterCreating(User::class, function ($user, $faker) {
	$user->email = strtolower(str_replace(' ', '_', $user->name).'@yopmail.com');
	$user->save();

	$user->customerProfile()->create([
		'country_id' => 1,
		'city_id' => mt_rand(1,City::count()),
	]);
});