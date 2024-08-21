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
        Schema::create('company_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('slug');
            $table->enum('type_job', ['WFO', 'WFH', 'Hybrid']);
            $table->string('location');
            $table->string('job_description');
            $table->unsignedBigInteger('salary_min');
            $table->unsignedBigInteger('salary_max')->nullable();
            $table->date('date_posted')->nullable();
            $table->date('date_closing')->nullable();
            $table->boolean('is_open')->default(false);
            $table->boolean('is_admin')->default(false);
            $table->foreignId('partner_id')->references('id')->on('partners')->onDelete('cascade');
            $table->foreignId('category_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_jobs');
    }
};
