<?php

namespace Database\Factories;

use App\Models\Krs;
use Illuminate\Database\Eloquent\Factories\Factory;
Use App\Models\Matakuliah;
Use App\Models\Mahasiswa;
/**
 * @extends Factory<Krs>
 */
class KrsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition(): array
{
    return [
        'npm' => Mahasiswa::factory(),
        'kode_matakuliah' => Matakuliah::factory(),
    ];
}
}
