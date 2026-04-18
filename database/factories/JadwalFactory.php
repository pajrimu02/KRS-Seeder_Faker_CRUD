<?php

namespace Database\Factories;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dosen;
use App\Models\Matakuliah;
/**
 * @extends Factory<Jadwal>
 */
class JadwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
            'kode_matakuliah' => Matakuliah::inRandomOrder()->first()->kode_matakuliah,
            'nidn' => Dosen::inRandomOrder()->first()->nidn,
            'kelas' => $this->faker->randomElement(['A','B','C']),
            'hari' => $this->faker->dayOfWeek(),
            'jam' => $this->faker->time(),
        ];
    }
}
