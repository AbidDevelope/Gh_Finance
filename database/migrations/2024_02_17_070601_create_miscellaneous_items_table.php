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
        Schema::create('miscellaneous_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('miscellaneous_id')->unsigned()->index();
            $table->text('description')->nullable();
            $table->string('month')->nullable();
            $table->date('date')->nullable();
            $table->decimal('total', 10, 3)->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miscellaneous_items');
    }
};
