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
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rt');
            $table->unsignedBigInteger('id_keluarga')->nullable(); // changed default(null) to nullable()
            $table->string('nik', 16)->unique();
            $table->string('nama', 30);
            $table->string('rw', 3)->default('001');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('golongan_darah', ['A', 'B', 'AB', 'O']);
            $table->string('tempat_lahir', 20);
            $table->date('tanggal_lahir');
            $table->string('alamat_ktp');
            $table->string('alamat_domisili');
            $table->string('no_hp', 13);
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('pekerjaan', 20);
            $table->enum('status_kawin', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']);
            $table->string('gambar_ktp');
            $table->enum('status_warga', ['Aktif', 'Meninggal', 'Pindah', 'Hilang'])->default('Aktif');
            $table->string('catatan_status')->default('Warga Telah Terdaftar dalam Sistem');
            $table->enum('status_keluarga', ['Kepala Keluarga', 'Istri', 'Anak'])->nullable(); // changed default(null) to nullable()
            $table->timestamps();
            
            $table->foreign('id_keluarga')->references('id')->on('keluarga');
            $table->foreign('id_rt')->references('id')->on('rt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warga');
    }
};

