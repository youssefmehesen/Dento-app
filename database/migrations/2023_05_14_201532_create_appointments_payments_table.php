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
        Schema::create('appointments_payments', function (Blueprint $table) {
            $table->id();        
            $table->foreignId('appointment_id')->constrained('appointments')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('payments_type_id')->constrained('payments_type')->cascadeOnUpdate()->cascadeOnDelete();
            $table->decimal('paid');        
            $table->decimal('rest');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments_payments');
    }
};
