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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('sr_no')->nullable();
            $table->date('date')->nullable();
            $table->string('cheque_number_receipt_number')->nullable();
            $table->string('description')->nullable();
            $table->string('beneficiary')->nullable();
            $table->string('amount_deposited')->nullable();
            $table->string('amount_withdrawn')->nullable();
            $table->string('project_name')->nullable();
            $table->string('column_1')->nullable();
            $table->string('column_2')->nullable();
            $table->string('service_type')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
