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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('project')->nullable();
            $table->string('purchase_from')->nullable();
            $table->string('purchase_date')->nullable();
            $table->string('purchase_by')->nullable();
            $table->string('paid_by')->nullable();
            $table->decimal('amount', 8,3)->nullable();
            $table->string('attachments')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
