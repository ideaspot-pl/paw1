<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            'id' => 1,
            'name' => 'Szczecin',
            'country' => 'PL',
            'latitude' => 53.428543,
            'longitude' => 14.552812,
        ]);
        DB::table('locations')->insert([
            'id' => 2,
            'name' => 'Police',
            'country' => 'PL',
            'latitude' => 53.55214,
            'longitude' => 14.57182,
        ]);
        DB::table('locations')->insert([
            'id' => 3,
            'name' => 'Berlin',
            'country' => 'DE',
            'latitude' => 52.531677,
            'longitude' => 13.381777,
        ]);
    }
}
