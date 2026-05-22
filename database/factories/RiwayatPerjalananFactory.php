<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Penumpang;
use App\Models\Driver;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RiwayatPerjalanan>
 */
class RiwayatPerjalananFactory extends Factory
{
    public function definition(): array
    {
        return [
            'penumpang_id' => Penumpang::factory(),
            'driver_id' => Driver::factory(),
            'lokasi_jemput' => fake()->streetAddress(),
            'tujuan' => fake()->city(),
            'harga' => fake()->numberBetween(10000, 50000),
            'status' => fake()->randomElement(['selesai', 'dibatalkan']),
        ];
    }
}