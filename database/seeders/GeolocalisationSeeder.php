<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeolocalisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('geolocalisations')->insert([
            'imei' => '861456982365547',
            'date_tracker' => '2020-08-13 22:04:16.000000',
            'angle' => '23',
            'speed' => '44',
            'position' => 28.452763,
            'status' => 'S',
            'name' => 'VCL11',
            'sim_number' => '212656693254',
            'model' => 'M1',
            'code' => 'KE500006T',
        ]);
    }
}
