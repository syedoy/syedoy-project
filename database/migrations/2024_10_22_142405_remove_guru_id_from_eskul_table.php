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
        Schema::table('eskul', function (Blueprint $table) {
            $table->dropForeign(['guru_id']);  // Menghapus foreign key dulu
            $table->dropColumn('guru_id');     // Setelah itu baru hapus kolom 'user_id'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eskul', function (Blueprint $table) {
            //
        });
    }
};
