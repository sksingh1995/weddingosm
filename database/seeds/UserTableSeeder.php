<?php

use App\Models\City;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    	$total = User::count();

    	if($total <= 20){
    		for ($i=0; $i < 20; $i++) { 
    			$user = User::create([
    				'name' => $faker->name,
    				'email' => $faker->unique()->safeEmail,
    				'phone' => 9015470425,
    				'password' => bcrypt(111111),
    				'avatar' => config('params.avatar_placeholder'),
    				'active' => 1,
    			]);

    			$user->email = strtolower(str_replace(' ', '_', $user->name).'@yopmail.com');
    			$user->save();

    			$user->customerProfile()->create([
    				'country_id' => 1,
    				'city_id' => mt_rand(1,City::count()),
    			]);
    		}
    	}
    }
}
