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
        Schema::create('expense_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('expenses_id')->unsigned()->index();
            $table->text('description')->nullable();
            $table->string('month')->nullable();
            $table->date('date')->nullable();
            $table->string('receipt')->nullable();
            $table->decimal('amount_deposite', 10, 3)->nullable();
            $table->decimal('amount_withdrawn', 10, 3)->nullable();
            $table->string('beneficiary')->nullable();
            $table->decimal('total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expense_items');
    }
};
