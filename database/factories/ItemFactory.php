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
            'description' => $this->faker->sentence,
            'item_type' => $this->faker->randomElement(['alkes', 'obat']),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'image_picture' => $this->faker->imageUrl,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}