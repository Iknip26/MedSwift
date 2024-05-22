<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            [
                'item_id' => 7,
                'order_id' => 5,
                'value' => 2,
                'note' => 'Beli 2 buah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 8,
                'order_id' => 6,
                'value' => 1,
                'note' => 'Beli 1 buah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 9,
                'order_id' => 6,
                'value' => 3,
                'note' => 'Beli 3 buah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 10,
                'order_id' => 7,
                'value' => 2,
                'note' => 'Beli 2 buah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}