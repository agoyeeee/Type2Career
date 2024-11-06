<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel 'questions'.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan');
            $table->string('dimensi');
            $table->timestamps();
        });
    }

    /**
     * Hapus tabel 'questions' jika rollback dilakukan.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
