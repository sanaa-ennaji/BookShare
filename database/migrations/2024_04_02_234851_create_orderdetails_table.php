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
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')
            ->constrained('orders')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->string('address' , 255);
            $table->string('adress2' , 255);
            $table->string('city' , 255);
            $table->string('state' , 255)->nullable();
            $table->string('zipcode' , 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderdetails');
    }
};
