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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignUuid('company_uuid')->references('uuid')->on('companies')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignUuid('category_uuid')->nullable()->references('uuid')->on('categories')->onUpdate('cascade')->onDelete('restrict');
            $table->string('sku_code');
            $table->string('name');
            $table->decimal('price')->nullable()->default(0);
            $table->text('description')->nullable();
            $table->boolean('is_active')->nullable()->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
