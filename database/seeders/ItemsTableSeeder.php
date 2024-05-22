<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'product_name' => 'Paracetamol',
                'category' => 'Obat, Demam, Pusing',
                'description' => 'Ini adalah obat untuk mengatasi demam dan pusing',
                'item_type' => 'obat',
                'price' => 5000.00,
            ],
            [
                'product_name' => 'Vitamin C',
                'category' => 'Suplemen, Kesehatan',
                'description' => 'Vitamin untuk meningkatkan daya tahan tubuh',
                'item_type' => 'suplemen',
                'price' => 20000.00,
            ],
            [
                'product_name' => 'Antibiotik',
                'category' => 'Obat, Infeksi',
                'description' => 'Obat untuk mengatasi infeksi bakteri',
                'item_type' => 'obat',
                'price' => 15000.00,
            ],
            [
                'product_name' => 'Aspirin',
                'category' => 'Obat, Nyeri, Demam',
                'description' => 'Obat untuk meredakan nyeri dan demam',
                'item_type' => 'obat',
                'price' => 10000.00,
            ],
            [
                'product_name' => 'Hand Sanitizer',
                'category' => 'Kesehatan, Higienis',
                'description' => 'Gel pembersih tangan tanpa air',
                'item_type' => 'alat kesehatan',
                'price' => 25000.00,
            ],
            [
                'product_name' => 'Masker Medis',
                'category' => 'Kesehatan, Perlindungan',
                'description' => 'Masker untuk perlindungan dari debu dan virus',
                'item_type' => 'alat kesehatan',
                'price' => 5000.00,
            ],
            [
                'product_name' => 'Obat Batuk',
                'category' => 'Obat, Batuk',
                'description' => 'Obat untuk meredakan batuk',
                'item_type' => 'obat',
                'price' => 7500.00,
            ],
            [
                'product_name' => 'Termometer',
                'category' => 'Kesehatan, Pengukur',
                'description' => 'Alat untuk mengukur suhu tubuh',
                'item_type' => 'alat kesehatan',
                'price' => 30000.00,
            ],
            [
                'product_name' => 'Obat Maag',
                'category' => 'Obat, Lambung',
                'description' => 'Obat untuk mengatasi sakit maag',
                'item_type' => 'obat',
                'price' => 8000.00,
            ],
            [
                'product_name' => 'Suplemen Zat Besi',
                'category' => 'Suplemen, Kesehatan',
                'description' => 'Suplemen untuk menambah zat besi dalam tubuh',
                'item_type' => 'suplemen',
                'price' => 12000.00,
            ],
        ]);
    }
}