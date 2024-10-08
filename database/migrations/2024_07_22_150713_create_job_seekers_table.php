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
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->date('date_of_birth')->date_format('Y-m-d');
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->string('current_address');
            $table->string('domicile_address');
            $table->string('phone_number');
            $table->boolean('is_collage');
            $table->string('name_education');
            $table->string('majoring_in_education');
            $table->string('graduation_year');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seekers');
    }
};
