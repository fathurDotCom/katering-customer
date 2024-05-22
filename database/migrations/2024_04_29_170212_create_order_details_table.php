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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignUuid('order_uuid')->references('uuid')->on('orders')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignUuid('product_uuid')->references('uuid')->on('products')->onUpdate('cascade')->onDelete('restrict');
            $table->decimal('price');
            $table->integer('sum')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
