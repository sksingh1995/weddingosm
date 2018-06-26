<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            'Wedding Venues', 'Wedding Photographers', 'Bridal Makeup', 'Family Makeup', 'Bridal Wear', 'Groom Wear', 'Wedding Decorators', 'Wedding Planner', 'Wedding Cards', 'Wedding Videography', 'Bridal Mehendi', 'Wedding Cakes', 'Wedding Jewellery', 'Wedding Catering', 'Trousseau Packers', 'Sangeet Choreographer'
        ];

        foreach ($services as $service) {
            Service::firstOrCreate([
                'service_name' => $service
            ]);
        }
    }
}
