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
        Schema::create('payroll_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('payroll_id')->unsigned()->index();
            $table->date('date')->nullable();
            $table->string('month')->nullable();
            $table->string('employee_name')->nullable();
            $table->decimal('actual_salary', 10, 3)->nullable();
            $table->decimal('payroll', 10, 3)->nullable();
            $table->decimal('salary', 10, 3)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll_items');
    }
};
