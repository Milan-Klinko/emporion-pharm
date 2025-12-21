<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'category' => fake()->word(),
            'price' => fake()->randomFloat(2, 0, 999999.99),
            'stock' => fake()->numberBetween(-10000, 10000),
        ];
    }
}
