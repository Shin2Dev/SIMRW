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
        Schema::create('anggota_rt', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_warga');
            $table->unsignedBigInteger('id_rt');
            $table->unsignedBigInteger('id_jabatan');
            $table->string('foto_profil');
            $table->string('periode', 9);
            $table->timestamps();

            $table->foreign('id_warga')->references('id')->on('warga');
            $table->foreign('id_rt')->references('id')->on('rt');
            $table->foreign('id_jabatan')->references('id')->on('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_rt');
    }
};
