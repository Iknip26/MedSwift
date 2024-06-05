<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Item;
use App\Models\Hospital;
use App\Models\Order;
use App\Models\Drug;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Generate 10 users
        User::factory(10)->create();

        // Generate 20 items
        Item::factory(20)->create();

        // Generate 5 hospitals
        Hospital::factory(5)->create();

        // Generate 10 orders
        Order::factory(10)->create();

        // Generate 30 drugs
        Drug::factory(30)->create();
    }
}
