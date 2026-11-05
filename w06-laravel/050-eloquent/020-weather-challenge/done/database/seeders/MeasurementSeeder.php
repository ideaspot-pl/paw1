<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ([1,2,3] as $locationId) {
            for ($i = 1; $i <= 5; $i++) {
                DB::table('measurements')->insert([
                    'location_id' => $locationId,
                    'date' => new \DateTime("+{$i} day"),
                    'celsius' => rand(-5, 12),
                ]);
            }
        }
    }
}
