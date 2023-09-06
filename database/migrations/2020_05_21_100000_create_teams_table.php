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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sport_id')->index()->nullable();
            $table->foreignId('user_id')->index()->nullable();
            $table->foreignId('league_id')->nullable();
            $table->string('name')->index();
            $table->string('country')->nullable();
            $table->string('logo')->nullable();
            $table->json('contact')->nullable();
            $table->string('website')->nullable();
            $table->json('socials')->nullable();
            $table->boolean('personal_team');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
