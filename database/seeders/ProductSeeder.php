<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create(['name' => 'Vitamin D3 1000 IU', 'category' => 'Suplementi', 'price' => 1000, 'stock' => 50]);
        Product::create(['name' => 'Multivitamin kompleks', 'category' => 'Suplementi', 'price' => 500, 'stock' => 100]);
        Product::create(['name' => 'Krema za ruke', 'category' => 'Kozmetika', 'price' => 800, 'stock' => 30]);
        Product::create(['name' => 'Vitamin C 500 mg', 'category' => 'Suplementi', 'price' => 1200, 'stock' => 80]);
    }
}