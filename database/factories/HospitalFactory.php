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
            'adress' => $this->faker->address,
            'desc' => $this->faker->text(200),
        ];
    }
}
