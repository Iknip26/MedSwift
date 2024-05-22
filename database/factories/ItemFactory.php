<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    protected $model = Item::class;

    public function definition()
    {
        return [
            'product_name' => $this->faker->word,
            'category' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'item_type' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 10, 1000), // price between 10 and 1000
        ];
    }
}
