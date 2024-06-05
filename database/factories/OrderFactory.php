<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use App\Models\Hospital;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'customer_id' => User::factory(),
            'hospital_id' => Hospital::factory(),
            'order_date' => $this->faker->date,
            'payment_method' => $this->faker->randomElement(['BCA', 'Mandiri', 'BNI', 'BRI', 'BSI']),
            'isPaymentSuccess' => $this->faker->boolean,
            'shipment_date' => $this->faker->date,
            'shipment_address' => $this->faker->address,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}