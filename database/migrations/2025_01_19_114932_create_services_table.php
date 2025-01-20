?
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('date_services', function (Blueprint $table) {
            $table->id();
            $table->string('date_service');
            $table->timestamps();
        });

        Schema::create('time_services', function (Blueprint $table) {
            $table->id();
            $table->time('time');
            $table->timestamps();
        });

        Schema::create('services', callback: function (Blueprint $table) {
            $table->id();
            $table->decimal('price', 10, 2);

            $table->unsignedBigInteger('konselor_id');
            $table->unsignedBigInteger('date_service_id');
            $table->unsignedBigInteger('time_service_id');

            $table->foreign('konselor_id')->references('id')->on('konselors')->onDelete('cascade');
            $table->foreign('date_service_id')->references('id')->on('date_services')->onDelete('cascade');
            $table->foreign('time_service_id')->references('id')->on('time_services')->onDelete('cascade');

            $table->enum('status', ['booked', 'ready'])->default('ready');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
        Schema::dropIfExists('services_times');
    }
};
