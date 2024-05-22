<?php

namespace Database\Seeders;

use App\Models\Stock;
use App\Models\Stocks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    public function run()
    {
        Stock::factory()->count(10)->create();
    }
}
