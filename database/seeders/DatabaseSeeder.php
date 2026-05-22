<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PenumpangSeeder;
use Database\Seeders\DriverSeeder;
use Database\Seeders\RiwayatPerjalananSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PenumpangSeeder::class,
            DriverSeeder::class,
            RiwayatPerjalananSeeder::class,
        ]);
    }
}