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
        // Schema::create('surat', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nomor_surat')->unique();
        //     $table->string('judul_surat');
        //     $table->text('isi_surat');
        //     $table->date('tanggal_surat');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_surat');
    }
};