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
        Schema::create('informasi', function (Blueprint $table) {
            $table->id();
            $table->string('judul_info', 20);
            $table->unsignedBigInteger('id_kategori_info');
            $table->unsignedBigInteger('id_rt');
            $table->string('deskripsi_info');
            $table->date('tanggal_info');
            $table->string('tempat_info', 30);
            $table->enum('status_info', ['Publik', 'Draf']);
            $table->string('gambar_info');
            $table->timestamps();

            $table->foreign('id_kategori_info')->references('id')->on('kategori_info');
            $table->foreign('id_rt')->references('id')->on('rt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi');
    }
};
