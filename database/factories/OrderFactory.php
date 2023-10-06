<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => null,
            'product_id' => null,
            'quantity' => $this->faker->numberBetween(15, 1020),
            'total_price' => $this->faker->randomFloat(2, 1000, 100000),
        ];
    }
}
