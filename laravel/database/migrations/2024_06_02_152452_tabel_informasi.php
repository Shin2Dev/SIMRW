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
            $table->string('judul');
            $table->unsignedBigInteger('id_kategori');
            $table->unsignedBigInteger('id_rt');
            $table->text('deskripsi');
            $table->date('tanggal');
            $table->string('tempat', 30);
            $table->enum('status', ['Publik', 'Draf']);
            $table->string('gambar');
            $table->timestamps();

            $table->foreign('id_kategori')->references('id')->on('kategori_info');
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
