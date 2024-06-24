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
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->increments('id_job_vacancy');
            $table->foreignId('partner_id');
            $table->foreignId('category_id');
            $table->string('job_title', length: 100);
            $table->string('slug', length: 100);
            $table->string('job_description', length: 255);
            $table->string('location', length: 100);
            $table->double('salary_min');
            $table->double('salary_max');
            $table->enum('type_job', ['WFO', 'WFH', 'Hybrid']);
            $table->date('date_posted');
            $table->date('date_closed');
            $table->softDeletes('deleted_at', precision: 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_vacancies');
    }
};
