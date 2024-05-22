<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals')->insert([
            [
                'name' => 'Hospital A',
                'adress' => 'Jl. Hospital A No. 123',
                'desc' => 'Hospital A provides excellent medical services.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hospital B',
                'adress' => 'Jl. Hospital B No. 456',
                'desc' => 'Hospital B specializes in surgical procedures.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}