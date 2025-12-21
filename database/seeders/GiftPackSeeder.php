<?php

namespace Database\Seeders;

use App\Models\GiftPack;
use Illuminate\Database\Seeder;

class GiftPackSeeder extends Seeder
{
    public function run(): void
    {
        GiftPack::create(['name' => 'Imunitet booster', 'description' => 'Vitamin C + Cink + Echinacea']);
        GiftPack::create(['name' => 'Energija paket', 'description' => 'B-kompleks + Magnezijum']);
        GiftPack::create(['name' => 'Relax paket', 'description' => 'Magnezijum + Valerijana']);
    }
}
