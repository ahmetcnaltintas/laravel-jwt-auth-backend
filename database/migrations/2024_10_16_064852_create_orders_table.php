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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_no')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('addres_id');
            $table->unsignedBigInteger('cargo_id')->nullable();
            $table->decimal('total_amount', 10, 2);
            $table->enum('status', ['pending', 'paid', 'shipped', 'delivered', 'cancelled'])->default('pending');
            $table->longText('detail');
            $table->string('coupon')->nullable();
            $table->string('tracking_no')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('addres_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->foreign('cargo_id')->references('id')->on('cargo_companies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
