<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * KUPONLAR.
     */
    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code');
            $table->double('price');
            $table->boolean('price_statu')->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('limit')->default(0);
            $table->integer('category_id')->default(0);
            $table->integer('product_id')->default(0);
            $table->integer('package_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->enum('type', ['category','product','package','user'])->default('package');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
