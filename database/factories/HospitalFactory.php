<?php

namespace Database\Factories;

use App\Models\Hospital;
use App\Models\Hospitals;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HospitalFactory extends Factory
{
    protected $model = Hospital::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'logo' => $this->faker->imageUrl,
            'adress' => $this->faker->address,
            'desc' => $this->faker->text,
            'open_time' => $this->faker->date,
            'close_time' => $this->faker->date,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}