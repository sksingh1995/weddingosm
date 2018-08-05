<?php

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            'india'
        ];

        foreach ($countries as $country) {
            Country::firstOrCreate([
                'country_name' => $country
            ]);
        }
    }
}
