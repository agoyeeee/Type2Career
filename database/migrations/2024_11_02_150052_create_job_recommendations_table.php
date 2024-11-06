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
        Schema::create('job_recommendations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mbti_type_id');
            $table->string('job_title', 255);
            $table->text('job_description')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('mbti_type_id')->references('id')->on('mbti_types')->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_recommendations');
    }
};
