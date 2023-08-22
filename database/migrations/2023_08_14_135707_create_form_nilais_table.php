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
        Schema::create('form_nilais', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai_bindo');
            $table->integer('nilai_binggris');
            $table->integer('nilai_mtk');
            $table->integer('nilai_ipa');
            $table->string('doc_nilaiujian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_nilais');
    }
};
