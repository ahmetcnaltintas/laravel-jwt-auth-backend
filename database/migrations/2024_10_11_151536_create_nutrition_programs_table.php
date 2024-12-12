<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * BESLENME PROGRAMI.
     */
    public function up(): void
    {
        Schema::create('nutrition_programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('day')->default(1);
            $table->longText('morning_meal')->nullable();
            $table->string('morning_time')->nullable();
            $table->longText('snack_1')->nullable();
            $table->longText('midday_meal')->nullable();
            $table->longText('midday_time')->nullable();
            $table->longText('snack_2')->nullable();
            $table->longText('evening_meal')->nullable();
            $table->longText('evening_time')->nullable();
            $table->longText('snack_3')->nullable();
            $table->text('note')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutrition_programs');
    }
};
