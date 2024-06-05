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
        // Schema::create('anggota_rw', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nip', 18)->unique();
        //     $table->unsignedBigInteger('id_warga');
        //     $table->string('foto_profil');
        //     $table->string('jabatan');
        //     $table->timestamps();

        //     $table->foreign('id_warga')->references('id')->on('warga');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_rw');
    }
};
