<?php

namespace Database\Factories;

use App\Models\Drug;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class DrugFactory extends Factory
{
    protected $model = Drug::class;

    public function definition()
    {
        return [
            'item_id' => Item::factory(),
            'komposisi' => $this->faker->word,
            'side_effect' => $this->faker->word,
            'dosage' => $this->faker->word,
            'using_guide' => $this->faker->word,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
