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
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_warga');
            $table->unsignedBigInteger('id_rt');
            $table->unsignedBigInteger('id_jenis_surat');
            $table->unsignedBigInteger('id_anggota_rt')->nullable();
            // $table->unsignedBigInteger('id_anggota_rw');
            $table->string('nomor_surat')->unique()->nullable();
            $table->string('keperluan_surat', 50);
            $table->enum('status_surat', ['Disetujui', 'Ditolak', 'Dalam Proses']);
            $table->timestamps();

            $table->foreign('id_warga')->references('id')->on('warga');
            $table->foreign('id_rt')->references('id')->on('rt');
            $table->foreign('id_jenis_surat')->references('id')->on('jenis_surat');
            $table->foreign('id_anggota_rt')->references('id')->on('anggota_rt');
            // $table->foreign('id_anggota_rw')->references('id')->on('anggota_rw');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat');
    }
};
