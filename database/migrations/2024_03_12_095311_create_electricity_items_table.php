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
        Schema::create('electricity_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('electricity_id')->unsigned();
            $table->date('date')->nullable();
            $table->string('month')->nullable();
            $table->string('unit')->nullable();
            $table->date('due_date')->nullable();
            $table->decimal('total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('electricity_items');
    }
};
