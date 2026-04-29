<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class krs extends Model
{
    use HasFactory;
    protected $table = 'krs';
    protected $guarded = [];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'npm');
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'kode_matakuliah');
    }
}
