<?php

namespace Database\Factories;

use App\Models\ProductOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'quantity' => fake()->numberBetween(-10000, 10000),
            'price_per_unit' => fake()->randomFloat(2, 0, 999999.99),
            'product_order_id' => ProductOrder::factory(),
        ];
    }
}
