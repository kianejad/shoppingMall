<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $array = [
            null, $this->faker->numberBetween(1, 10)
        ];
        return [
            'name' => $this->faker->word,
            'parent_id' => $array[array_rand($array)],
            'is_active' => $this->faker->boolean,
        ];
    }
}
