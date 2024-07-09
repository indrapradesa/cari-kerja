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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_reff', length: 100)->unique();
            $table->string('channel', length: 100)->nullable();
            $table->string('photo_invoice', length: 255)->nullable();
            $table->date('periode');
            $table->date('paid_date')->nullable();
            $table->double('amount');
            $table->enum('status', ['unpaid', 'paid', 'cancelled'])->default('unpaid');
            $table->timestamps();
            $table->foreignId('partner_id')->references('id')->on('partners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
