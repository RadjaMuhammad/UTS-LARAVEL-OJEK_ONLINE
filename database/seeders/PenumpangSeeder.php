<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penumpang;

class PenumpangSeeder extends Seeder
{
    public function run(): void
    {
        Penumpang::factory(10)->create();
    }
}