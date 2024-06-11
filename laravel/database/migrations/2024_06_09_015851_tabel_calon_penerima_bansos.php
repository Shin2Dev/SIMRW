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
        Schema::create('calon_penerima_bansos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_warga')->unique();
            $table->unsignedBigInteger('id_rt');
            $table->string('pekerjaan', 30);
            $table->string('penghasilan_bulanan', 30);
            $table->string('usia', 20);
            $table->string('pendidikan', 30);
            $table->string('luas_bangunan', 20);
            $table->string('jenis_lantai', 20);
            $table->string('jenis_dinding', 20);
            $table->string('kendaraan', 30);
            $table->string('sumber_penerangan', 30);
            $table->string('status_kepemilikan_rumah', 20);
            $table->boolean('penerima_bansos')->default(false);
            $table->unsignedInteger('nilai_bansos')->default(0);
            $table->unsignedInteger('ranking_bansos')->default(0);
            $table->timestamps();

            $table->foreign('id_warga')->references('id')->on('warga');
            $table->foreign('id_rt')->references('id')->on('rt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_penerima_bansos');
    }
};
