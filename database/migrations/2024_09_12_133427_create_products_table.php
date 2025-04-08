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
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->string('name')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->enum('status',['Active','DeActive'])->default('Active');
            $table->enum('is_popular',['Yes','No'])->default('No');
            $table->enum('is_featured',['Yes','No'])->default('No');
            $table->foreign('subcategory_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
