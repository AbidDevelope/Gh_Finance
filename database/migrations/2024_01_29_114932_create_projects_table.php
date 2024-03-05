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
            $table->date('date')->nullable();
            $table->string('project_manager')->nullable();
            $table->string('manager_email')->nullable();
            $table->string('Manager_mobile')->nullable();
            $table->string('Manager_landline')->nullable();
            $table->string('manager_remarks')->nullable();

            $table->string('company_name')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('client_email')->nullable();
            $table->string('client_mobile')->nullable();
            $table->string('company_landline')->nullable();
            $table->string('company_location')->nullable();
            $table->string('company_landmark')->nullable();
            $table->string('company_country')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_remarks')->nullable();

            $table->string('project_name')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('project_email')->nullable();
            $table->string('project_mobile')->nullable();
            $table->string('project_location')->nullable();
            $table->decimal('project_value', 10, 3)->nullable();
            $table->string('project_country')->nullable();
            $table->string('payment_plan')->nullable();
            $table->text('project_description')->nullable();
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
