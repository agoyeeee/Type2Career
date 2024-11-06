<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mbti_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_code', 4); // VARCHAR(4) untuk kode MBTI seperti "INTJ"
            $table->text('description'); // Deskripsi singkat tipe MBTI
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_b_t_i_types');
    }
};
