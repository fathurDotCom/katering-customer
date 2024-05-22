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
            $table->uuid('uuid')->unique();
            $table->foreignUuid('company_uuid')->references('uuid')->on('companies')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignUuid('customer_uuid')->references('uuid')->on('customers')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('order_number');
            $table->string('invoice');
            $table->decimal('amount');
            $table->decimal('paid')->nullable();
            $table->enum('transaction_type', ['transfer', 'cash', 'loan']);
            $table->enum('created_method', ['admin', 'customer']);
            $table->text('description')->nullable();
            $table->foreignUuid('created_by')->nullable()->references('uuid')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
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
