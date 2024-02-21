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
        Schema::create('petty_cashes', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('cheque_number_receipt_number')->nullable();
            $table->string('description')->nullable();
            $table->string('beneficiary')->nullable();
            $table->decimal('amount_deposited', 10, 3)->nullable();
            $table->decimal('amount_withdrawn', 10, 3)->nullable();
            $table->string('project')->nullable();
            $table->decimal('total_amount_deposited', 10, 3)->nullable();
            $table->decimal('total_amount_withdrawn', 10, 3)->nullable();
            $table->decimal('total_in_account', 10, 3)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petty_cashes');
    }
};
