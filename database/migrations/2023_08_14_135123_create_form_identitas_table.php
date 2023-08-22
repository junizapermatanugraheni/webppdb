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
        Schema::create('form_identitas', function (Blueprint $table) {
            $table->id();
            $table->string('nmlengkap');
            $table->string('nik');
            $table->string('nisn');
            $table->string('alamat');
            $table->string('notelp_siswa');
            $table->string('tmplahir');
            $table->date('tgllahir');
            $table->string('jnskelamin');
            $table->string('agama');
            $table->string('asal_sekolah');
            $table->string('alamat_sekolah');
            $table->string('nmortu');
            $table->string('alamat_ortu');
            $table->string('pekerjaan_ortu');
            $table->string('notlp_ortu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_identitas');
    }
};
