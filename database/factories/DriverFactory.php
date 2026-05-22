<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'nama' => fake()->name(),
        'plat_nomor' => strtoupper(fake()->bothify('BK #### ??')),
        'telepon' => fake()->phoneNumber(),
        'status' => fake()->randomElement(['online', 'offline']),
    ];
}
}
