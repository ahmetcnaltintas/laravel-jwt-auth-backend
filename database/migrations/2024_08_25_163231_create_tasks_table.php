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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Kullanıcı ID
            $table->string('title'); // Görev başlığı
            $table->text('description')->nullable(); // Görev açıklaması
            $table->enum('priority', ['low', 'high'])->default('low'); // Görev önceliği
            $table->dateTime('due_date')->nullable(); // Görev için son tarih
            $table->timestamps();

            // Yabancı anahtar ilişkisi
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
