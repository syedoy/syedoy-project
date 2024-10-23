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
        Schema::create('eskul', function (Blueprint $table) {
        $table->id();
        $table->string('nama_eskul');
        $table->foreignId('guru_id')->constrained('guru'); // Mengaitkan dengan tabel guru
        $table->string('foto_kegiatan')->nullable(); // Menambahkan kolom foto_kegiatan
        $table->text('deskripsi')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eskul');
    }
};
