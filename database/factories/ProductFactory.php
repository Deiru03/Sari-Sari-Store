<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->words(2, true),
            'description' => fake()->sentence(20),
            'price' => fake()->randomFloat(2, 1, 10),
            'quantity' => fake()->numberBetween(0, 100),
        ];
    }
}
