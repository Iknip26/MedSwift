<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'customer_id' => 1,
                'hospital_id' => 1,
                'order_date' => '2024-05-22',
                'payment_method' => 'cash',
                'isPaymentSuccess' => true,
                'shipment_date' => '2024-05-23',
                'shipment_address' => 'Jl. Raya No. 123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2,
                'hospital_id' => 2,
                'order_date' => '2024-05-23',
                'payment_method' => 'cashless',
                'isPaymentSuccess' => true,
                'shipment_date' => '2024-05-24',
                'shipment_address' => 'Jl. Maju No. 456',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 4,
                'hospital_id' => 1,
                'order_date' => '2024-01-12',
                'payment_method' => 'cashless',
                'isPaymentSuccess' => true,
                'shipment_date' => '2024-05-24',
                'shipment_address' => 'Jl. Bantul no 18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}