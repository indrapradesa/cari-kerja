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
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id_partner');
            $table->foreignId('package_id');
            $table->string('partner_unique', length: 50)->unique();
            $table->string('company_name', length: 100);
            $table->string('slug', length: 100);
            $table->enum('type_partner', ['umkm', 'company']);
            $table->string('phone_number', length: 13)->unique();
            $table->string('email', length: 100)->unique();
            $table->string('address', length: 255);
            $table->string('link_instagram', length: 255)->nullable()->unique();
            $table->string('link_facebook', length: 255)->nullable()->unique();
            $table->string('link_linkedin', length: 255)->nullable()->unique();
            $table->string('link_web', length: 255)->nullable()->unique();
            $table->string('description', length: 255)->nullable();
            $table->enum('status',['active', 'suspend', 'temind']);
            $table->softDeletes('deleted_at', precision: 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
