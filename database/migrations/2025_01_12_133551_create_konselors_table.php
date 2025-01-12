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
        Schema::create('konselors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profile_image')->nullable(); // Store the path to the profile image
            $table->text('specializations')->nullable(); // Store specializations as a JSON or text
            $table->text('bio')->nullable(); // Optional: Add a biography for the counselor
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konselors');
    }
};
