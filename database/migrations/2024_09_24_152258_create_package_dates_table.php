<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * PAKET TARİHLERİ.
     */
    public function up(): void
    {
        Schema::create('package_dates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->unique();
            $table->date('training_start_date');
            $table->date('training_end_date');
            $table->date('nutrition_start_date');
            $table->date('nutrition_end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_dates');
    }
};
