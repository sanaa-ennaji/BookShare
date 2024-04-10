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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title' , 200);
            $table->string('image')->nullable();
            $table->string('author')->nullable();
            $table->integer('ISBN')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('status' ,45)->nullable();
            $table->longText('description')->nullable();
            $table->json('lang')->nullable();
            $table->decimal('price');
            $table->foreignId('store_id')
            ->constrained('stores')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('categorie_id')
            ->constrained('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('rating')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
