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
        Schema::create('player_attributes', function (Blueprint $table) {
            $table->id();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('salary')->nullable();
            $table->string('currency')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->text('biography')->nullable();
            $table->json('continents')->nullable();
            $table->json('positions')->nullable();
            $table->text('career')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_attributes');
    }
};
