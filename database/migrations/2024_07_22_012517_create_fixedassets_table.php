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
        Schema::create('fixedassets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->string('code');
            $table->string('serial_number');
            $table->integer('category_id');
            $table->integer('status_id');
            $table->integer('useful_life');
            $table->integer('quantity');
            $table->double('unit_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixedassets');
    }
};
