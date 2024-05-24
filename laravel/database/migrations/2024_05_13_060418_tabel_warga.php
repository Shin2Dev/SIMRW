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
        Schema::create('warga', function(Blueprint $table){
            $table -> increments('id');
            $table -> string('nama', 200);
            $table -> string('nik', 16) -> unique();
            $table -> string('alamat', 200);
            $table -> enum('jenis_kelamin', array('Laki-laki', 'Perempuan'));
            $table -> string('tempat_lahir', 200);
            $table -> date('tanggal_lahir');
            $table -> string('no_hp', 200) -> unique();
            $table -> boolean('status_kawin');
            $table -> string('pekerjaan', 200);
            $table -> boolean('status_warga');
            $table -> timestamps();
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
