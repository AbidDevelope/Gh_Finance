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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('project_type')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_manager_name')->nullable();
            $table->string('receipt')->nullable();
            $table->string('beneficiary')->nullable();
            $table->decimal('amount_deposite', 8,3)->nullable();
            $table->decimal('amount_withdraw', 8,3)->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
