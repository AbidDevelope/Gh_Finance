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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('beneficiary_id')->unsigned()->index();
            $table->bigInteger('project_id')->unsigned()->index();
            $table->string('quotation_number')->nullable();
            $table->date('quotation_date')->nullable();
            $table->date('valid_until')->nullable();
            $table->decimal('subtotal', 10,3)->nullable();
            $table->decimal('others', 10,3)->nullable();
            $table->decimal('grandtotal', 10,3)->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
