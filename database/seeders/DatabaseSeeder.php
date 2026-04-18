<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DosenSeeder;
use Database\Seeders\MatakuliahSeeder;
use Database\Seeders\MahasiswaSeeder;
use Database\Seeders\JadwalSeeder;
use Database\Seeders\KRSSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DosenSeeder::class,
            MatakuliahSeeder::class,
            MahasiswaSeeder::class,
            JadwalSeeder::class,
            KrsSeeder::class,
        ]);
    }
}
