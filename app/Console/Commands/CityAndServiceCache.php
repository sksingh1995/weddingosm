<?php

namespace App\Console\Commands;

use App\Classes\CSCBaseConfig;
use App\Models\City;
use App\Models\Service;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CityAndServiceCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'csc:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Grab all the active cities and services from database and saves in cache';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $services = Service::all();
        $cities = City::all();

        $filename = config('params.csc_cache');

        $fp = fopen(base_path() .'/config/csc.php' , 'wr');

        foreach ($services as $key => $service) {
            $keyname = str_replace(' ', '_', $service->service_name);

            $values['url_name'] = str_replace(' ', '-', $service->service_name);
            $values['sentence'] = ucwords($service->service_name);
            $values['id'] = ucwords($service->id);

            config(["{$filename}.services.".$keyname => $values]);

        }

        foreach ($cities as $key => $city) {
            $keyname = str_replace(' ', '_', $city->city_name);

            $values['url_name'] = str_replace(' ', '-', $city->city_name);
            $values['sentence'] = ucwords($city->city_name);
            $values['id'] = ucwords($city->id);

            config(["{$filename}.cities.".$keyname => $values]);

        }

        fwrite($fp, '<?php return ' . var_export(config($filename), true) . ';');

        fclose($fp);

        Artisan::call('cache:clear');
    }
}
