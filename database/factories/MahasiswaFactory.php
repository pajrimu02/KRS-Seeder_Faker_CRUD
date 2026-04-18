<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dosen;

class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'npm' => $this->faker->unique()->numerify('##########'),
            'nidn' => Dosen::inRandomOrder()->value('nidn') ?? Dosen::factory(),
            'nama' => $this->faker->name(),
        ];
    }
}