<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RiwayatPerjalanan;

class RiwayatPerjalananSeeder extends Seeder
{
    public function run(): void
    {
        RiwayatPerjalanan::factory(20)->create();
    }
}