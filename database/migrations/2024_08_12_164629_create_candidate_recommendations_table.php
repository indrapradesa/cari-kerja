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
        Schema::create('candidate_recommendations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_job_id')->references('id')->on('company_jobs')->onDelete('cascade');
            $table->foreignId('job_seeker_id')->references('id')->on('job_seekers')->onDelete('cascade');
            $table->string('description')->nullable();
            $table->boolean('is_hired')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_recommendations');
    }
};
