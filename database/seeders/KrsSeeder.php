<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Krs;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;

class KrsSeeder extends Seeder
{
   public function run()
{
    if (Mahasiswa::count() == 0) {
        Mahasiswa::factory()->count(20)->create();
    }

    if (Matakuliah::count() == 0) {
        Matakuliah::factory()->count(10)->create();
    }

    Krs::factory()->count(30)->create();
}
}
