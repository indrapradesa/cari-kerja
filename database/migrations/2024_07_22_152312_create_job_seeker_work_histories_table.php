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
        Schema::create('job_seeker_work_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_seeker_id');
            $table->string('company_name');
            $table->string('job_title');
            $table->date('start_date')->date_format('Y-m-d');
            $table->date('end_date')->date_format('Y-m-d');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_sekker_work_histories');
    }
};
