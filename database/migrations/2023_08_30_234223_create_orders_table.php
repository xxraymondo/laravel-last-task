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
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('resturant_id')->unique();
            $table->unsignedBigInteger('delivery_id')->unique();
            $table->string('Address',50);
            $table->decimal('amount', 5, 2) ;
            $table->timestamps();


            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('resturant_id')
            ->references('id')
            ->on('resturants')
            ->onDelete('cascade');

            $table->foreign('delivery_id')
            ->references('id')
            ->on('deliveries')
            ->onDelete('cascade');
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
