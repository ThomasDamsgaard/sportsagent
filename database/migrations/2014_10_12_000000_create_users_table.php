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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sport_id')->index()->nullable();
            $table->string('name')->nullable()->index();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('type')->default('player');
            $table->string('nationality')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->dateTime('age')->nullable();
            $table->nullableMorphs('attributable');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->boolean('verified')->default(false);
            $table->string('google_id')->nullable();
            $table->string('google_token')->nullable();
            $table->string('google_refresh_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
