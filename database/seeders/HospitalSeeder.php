<?php

namespace Database\Seeders;

use App\Models\Hospital;
use App\Models\Hospitals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    public function run()
    {
        Hospital::factory()->count(10)->create();
    }
}
