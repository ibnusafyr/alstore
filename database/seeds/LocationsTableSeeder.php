<?php

use Illuminate\Database\Seeder;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use App\Province;
use App\City;
class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Province::create([
            'province_id' => 1,
            'title' => "Jawa Barat"
        ]);
        Province::create([
            'province_id' => 2,
            'title' => "Jawa Timur"
        ]);
        
        City::create([
            'province_id' => 1,
            'city_id' => 1,
            'title' => "Bekasi"
        ]);
        City::create([
            'province_id' => 1,
            'city_id' => 2,
            'title' => "Bogor"
        ]);
        City::create([
            'province_id' => 1,
            'city_id' => 3,
            'title' => "Depok"
        ]);
        City::create([
            'province_id' => 2,
            'city_id' => 4,
            'title' => "Malang"
        ]);
        City::create([
            'province_id' => 2,
            'city_id' => 5,
            'title' => "Madura"
        ]);
        // $daftarProvinsi = RajaOngkir::provinsi()->all();
        // foreach ($daftarProvinsi as $provinceRow) {
        //     Province::create([
        //         'province_id' => $provinceRow['province_id'],
        //         'title' => $provinceRow['province']
        //     ]);
        //     $daftarKota = RajaOngkir::kota()->dariProvinsi($provinceRow['province_id'])->get();
        //     foreach ($daftarKota as $cityRow) {
        //         City::create([
        //             'province_id' => $provinceRow['province_id'],
        //             'city_id' => $cityRow['city_id'],
        //             'title' => $cityRow['city_name']
        //         ]);
        //     }
        // }
    }
}

