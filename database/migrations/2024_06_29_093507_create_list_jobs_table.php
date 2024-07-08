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
        Schema::create('list_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('job_description');
            $table->string('location');
            $table->double('salary_min');
            $table->double('salary_max');
            $table->date('date_posted');
            $table->date('date_closing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_jobs');
    }
};
