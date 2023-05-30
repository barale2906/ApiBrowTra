<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create([
            'name'  =>'Miami',
            'lat'   =>25.7741728,
            "lon"   =>-80.19362
        ]);
        City::create([
            'name'  =>'New York',
            'lat'   =>40.7127281,
            "lon"   =>-74.0060152
        ]);
        City::create([
            'name'  =>'Orlando',
            'lat'   =>28.5421109,
            "lon"   =>-81.3790304
        ]);
    }
}
