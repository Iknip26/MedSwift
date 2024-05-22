<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrugsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drugs')->insert([
            [
                'item_id' => 1,
                'komposisi' => 'Paracetamol',
                'side_effect' => 'Dapat menyebabkan mual jika dikonsumsi dengan perut kosong',
                'dosage' => '2 tablet per 6 jam',
                'using_guide' => 'Minum dengan air putih',
            ],
            [
                'item_id' => 2,
                'komposisi' => 'Asam Askorbat',
                'side_effect' => 'Dapat menyebabkan diare jika dikonsumsi dalam dosis tinggi',
                'dosage' => '1 tablet per hari',
                'using_guide' => 'Minum sesudah makan',
            ],
            [
                'item_id' => 3,
                'komposisi' => 'Amoxicillin',
                'side_effect' => 'Dapat menyebabkan alergi dan ruam kulit pada beberapa kasus',
                'dosage' => '1 kapsul setiap 8 jam',
                'using_guide' => 'Minum setelah makan',
            ],
            [
                'item_id' => 4,
                'komposisi' => 'Ibuprofen',
                'side_effect' => 'Dapat menyebabkan iritasi lambung jika dikonsumsi dalam dosis tinggi',
                'dosage' => '1 tablet per 4-6 jam',
                'using_guide' => 'Minum sesudah makan',
            ],
            [
                'item_id' => 5,
                'komposisi' => 'Ethanol',
                'side_effect' => 'Dapat menyebabkan iritasi pada kulit jika terpapar secara langsung',
                'dosage' => 'Gosokkan ke tangan secara merata',
                'using_guide' => 'Gunakan sesuai kebutuhan',
            ],
            [
                'item_id' => 6,
                'komposisi' => 'Sodium hypochlorite',
                'side_effect' => 'Dapat menyebabkan iritasi pada mata dan saluran pernapasan',
                'dosage' => 'Campurkan dengan air dalam perbandingan yang ditentukan',
                'using_guide' => 'Gunakan sarung tangan dan kacamata pelindung saat menggunakan',
            ],
        ]);
    }
}