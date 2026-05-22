<?php

namespace Database\Factories;

use App\Models\Penumpang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Penumpang>
 */
class PenumpangFactory extends Factory
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
        'email' => fake()->unique()->safeEmail(),
        'telepon' => fake()->phoneNumber(),
    ];
}
}
