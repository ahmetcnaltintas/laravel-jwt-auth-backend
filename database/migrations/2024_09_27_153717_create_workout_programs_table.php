<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * ANTRENMAN PROGRAMI.
     */
    public function up(): void
    {
        Schema::create('workout_programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movement_id')->constrained('movements')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('repeat');
            $table->string('set');
            $table->string('rest');
            $table->text('note')->nullable();
            $table->integer('day')->default(1);
            $table->boolean('status')->default(1);
            $table->integer('movement_order')->default(999);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_programs');
    }
};
