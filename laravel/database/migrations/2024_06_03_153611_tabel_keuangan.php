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
            $table->date('tanggal');
            $table->enum('jenis', ['Pemasukan', 'Pengeluaran']);
            $table->string('deskripsi');
            $table->decimal('jumlah', 15, 2);
            $table->decimal('saldo', 15, 2);
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
