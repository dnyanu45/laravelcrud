<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/create_orders_table.php
public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();  // Auto-incrementing primary key
        $table->string('order_number')->unique();  // Unique order number
        $table->string('customer_name');  // Customer name (cardholder name)
        // $table->decimal('total_amount', 8, 2);  // Total price for the order
        $table->json('cart_items');  // JSON field to store cart items
        $table->timestamps();  // Created_at and updated_at
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
