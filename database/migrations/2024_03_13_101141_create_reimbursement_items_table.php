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
        Schema::create('reimbursement_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reimbursement_id')->insigned();
            $table->string('description')->nullable();
            $table->date('reimbursement_date')->nullable();
            $table->string('employee_name')->nullable();
            $table->decimal('total', 10, 3)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reimbursement_items');
    }
};
