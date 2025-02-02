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
        Schema::create('cardpayments', function (Blueprint $table) {
            $table->id();
            $table->string('cardholder_name');
            $table->bigInteger('card_number');
            $table->string('expiry_date'); // Expiry date as a string (12/89)
            $table->integer('cvv');
            $table->decimal('total_amount', 8, 2); // Total amount with 2 decimal places
            $table->timestamps(); // Created at & Updated at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cardpayment');
    }
};
