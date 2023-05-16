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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('role_id')->constrained('roles')->cascadeOnUpdate()->cascadeOnDelete();
            $table->rememberToken();
            $table->timestamps();
            $table->string('address');
            $table->string('gender');
            $table->string('phone');
            $table->string('birth_date');
            $table->string('occupation');
            $table->string('martial_status');
            //$table->foreignId('martial_status_id')->constrained('martial_status')->cascadeOnUpdate()->cascadeOnDelete();
          


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        $table->drop("occupation_id");
    }
};
