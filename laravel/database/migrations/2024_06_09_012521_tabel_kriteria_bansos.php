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
        Schema::create('kriteria_bansos', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kriteria', 3)->unique();
            $table->string('nama_kriteria', 30);
            $table->enum('atribut', ['Benefit', 'Cost']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriteria_bansos');
    }
};
