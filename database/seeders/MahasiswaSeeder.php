<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
         
        if (Dosen::count() === 0) {
            Dosen::factory()->count(10)->create();
        }

        
        Mahasiswa::factory()->count(50)->create();
    }
}