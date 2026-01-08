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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->integer('year');
            $table->decimal('price', 10, 2);
            $table->integer('mileage');
            $table->string('color');
            $table->string('type'); // sedan, suv, truck, coupe, etc.
            $table->string('transmission'); // automatic, manual
            $table->string('fuel_type'); // gasoline, diesel, electric, hybrid
            $table->text('description')->nullable();
            $table->string('status')->default('available'); // available, sold, pending
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
