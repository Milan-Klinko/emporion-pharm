<?php

namespace Database\Seeders;

use App\Models\ProductSeederGiftPackSeederOrderSeederOrderItemSeeder;
use Illuminate\Database\Seeder;

class ProductSeederGiftPackSeederOrderSeederOrderItemSeederSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductSeederGiftPackSeederOrderSeederOrderItemSeeder::factory()->count(5)->create();
    }
}
