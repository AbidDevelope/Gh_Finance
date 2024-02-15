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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->unsigned()->index();
            $table->string('paymentMode')->nullable();
            $table->date('date')->nullable();
            $table->decimal('amount', 10, 3)->nullable();
            $table->string('receivable')->nullable();
            $table->string('chequeNumber')->nullable();
            $table->string('bankName')->nullable();
            $table->string('transactionId')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
