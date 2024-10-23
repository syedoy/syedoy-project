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
        Schema::table('guru', function (Blueprint $table) {
            $table->enum('jenis_kelamin', ['L', 'P'])->after('nip');
            $table->string('no_tlp')->nullable()->after('mata_pelajaran');
            $table->string('foto')->nullable()->after('no_tlp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('guru', function (Blueprint $table) {
            $table->enum('jenis_kelamin', ['L', 'P'])->after('nip');
            $table->string('no_tlp')->nullable()->after('mata_pelajaran');
            $table->string('foto')->nullable()->after('no_tlp');
        });
    }
};
