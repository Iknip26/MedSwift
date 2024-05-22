<?php

namespace Database\Factories;

use App\Models\Hospital;
use App\Models\Item;
use App\Models\Stock;
use App\Models\Stocks;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StockFactory extends Factory
{
    protected $model = Stock::class;

    public function definition()
    {
        return [
            'hospital_id' => Hospital::factory(),
            'item_id' => Item::factory(),
            'stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}
