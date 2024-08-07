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
        Schema::create('high_sites', function (Blueprint $table) {
            $table->id();
            $table->integer('pop_id')->nullable();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('address');
            $table->string('gps_coord')->nullable();
            $table->enum('status', ['Active','Disabled'])->default('Active');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('high_sites');
    }
};
