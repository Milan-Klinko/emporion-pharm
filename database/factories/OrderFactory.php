<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order_number' => fake()->word(),
            'customer_name' => fake()->word(),
            'customer_address' => fake()->word(),
            'delivery_date' => fake()->date(),
            'delivery_time' => fake()->time(),
            'total' => fake()->randomFloat(2, 0, 999999.99),
            'voucher_code' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'note' => fake()->text(),
            'gift_selected' => fake()->boolean(),
            'status' => fake()->word(),
        ];
    }
}
