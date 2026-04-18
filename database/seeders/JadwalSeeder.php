<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jadwal;
use App\Models\Dosen;
use App\Models\Matakuliah;

class JadwalSeeder extends Seeder
{
   public function run()
{
    if (Dosen::count() == 0) {
        Dosen::factory()->count(5)->create();
    }

    if (Matakuliah::count() == 0) {
        Matakuliah::factory()->count(10)->create();
    }

    Jadwal::factory()->count(15)->create();
}
}
