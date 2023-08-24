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
        Schema::create('model_form_pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->char('nopendaftaran');
            $table->string('nmlengkap');
            $table->int('nik')->unique();
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
            $table->integer('nilai_bindo');
            $table->integer('nilai_binggris');
            $table->integer('nilai_mtk');
            $table->integer('nilai_ipa');
            $table->string('doc_nilaiujian');
            $table->string('idjurusan1');
            $table->string('idjurusan2');
            $table->string('doc_ketlulus');
            $table->string('doc_foto');
            $table->string('doc_lainnya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_form_pendaftarans');
    }
};
