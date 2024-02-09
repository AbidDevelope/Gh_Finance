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

        // Schema::create('projects', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->text('description')->nullable();
        //     $table->unsignedBigInteger('project_manager_id');
        //     $table->date('start_date');
        //     $table->date('end_date')->nullable();
        //     $table->string('status');
        //     $table->string('location')->nullable();
        //     $table->decimal('budget', 15, 2);
        //     $table->string('currency')->default('USD');
        //     $table->decimal('cost_to_date', 15, 2)->default(0.00);
        //     $table->decimal('estimated_completion_cost', 15, 2)->nullable();
        //     // Add other fields as necessary
        //     $table->timestamps();
        
        //     $table->foreign('project_manager_id')->references('id')->on('users'); // Adjust the 'users' table name as necessary
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
