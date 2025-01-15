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
        Schema::table('konselors', function (Blueprint $table) {
            $table->text('about_me')->nullable()->after('bio');
            $table->text('handled_cases')->nullable()->after('about_me');
            $table->text('clinical_approaches')->nullable()->after('handled_cases');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('konselors', function (Blueprint $table) {
            //
        });
    }
};
