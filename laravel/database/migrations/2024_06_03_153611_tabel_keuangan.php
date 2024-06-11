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
        Schema::create('keuangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rt');
            $table->date('tanggal_keuangan');
            $table->enum('jenis_keuangan', ['Pemasukan', 'Pengeluaran']);
            $table->string('deskripsi_keuangan', 50);
            $table->decimal('jumlah_keuangan', 15, 2);
            $table->decimal('saldo', 15, 2)->nullable();
            $table->timestamps();
            
            $table->foreign('id_rt')->references('id')->on('rt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangan');
    }
};
