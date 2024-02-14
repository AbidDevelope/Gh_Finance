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
            $table->string('project_type')->nullable();
            $table->string('project_manager')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_location')->nullable();
            $table->decimal('project_value', 10, 3)->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('office_landline')->nullable();
            $table->string('office_location')->nullable();
            $table->string('remarks')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_location')->nullable();
            $table->text('description')->nullable();
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
