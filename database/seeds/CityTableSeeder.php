<?php

use Illuminate\Database\Seeder;
use App\Models\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'delhi ncr', 'mumbai', 'banglore', 'hyderabad', 'pune', 'chennai', 'goa', 'jaipur', 'kolkata', 'chandigarh', 'ahmedabad', 'agra', 'ambala', 'amritsar', 'aurangabad', 'bhubaneswar'
        ];

        foreach ($cities as $city) {
            City::firstOrCreate([
                'city_name' => $city
            ]);
        }
    }
}
