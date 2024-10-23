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
            $table->unsignedBigInteger('pembina_id')->nullable()->after('deskripsi');
            $table->foreign('pembina_id')->references('id')->on('guru')->onDelete('set null');
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
