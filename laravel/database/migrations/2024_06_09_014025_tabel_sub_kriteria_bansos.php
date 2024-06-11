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
        Schema::create('sub_kriteria_bansos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kriteria');
            $table->string('nama_sub_kriteria', 50);
            $table->string('kategori_sub_kriteria', 20);
            $table->unsignedInteger('nilai_sub_kriteria');
            $table->timestamps();

            $table->foreign('id_kriteria')->references('id')->on('kriteria_bansos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_kriteria_bansos');
    }
};

