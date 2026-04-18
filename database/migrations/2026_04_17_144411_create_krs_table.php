<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
  Schema::create('Krs', function (Blueprint $table) {
    $table->id();
    $table->char('npm', 10);
    $table->char('kode_matakuliah', 8);
    $table->timestamps();

    $table->foreign('npm')->references('npm')->on('mahasiswa')->cascadeOnDelete();
    $table->foreign('kode_matakuliah')->references('kode_matakuliah')->on('matakuliah')->cascadeOnDelete();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krs');
    }
};
