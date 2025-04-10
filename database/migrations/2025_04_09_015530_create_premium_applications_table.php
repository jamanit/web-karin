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
        Schema::create('premium_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->nullable();
            $table->string('image')->nullable();
            $table->string('title');
            $table->integer('price');
            $table->string('discount')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('premium_applications');
    }
};
