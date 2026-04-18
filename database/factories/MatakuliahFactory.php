<?php

namespace Database\Factories;

use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
            'kode_matakuliah' => 'MK' . $this->faker->unique()->numberBetween(10000, 99999),
            'nama_matakuliah' => $this->faker->word(),
            'sks' => $this->faker->numberBetween(2, 4),
        ];
    }
}
