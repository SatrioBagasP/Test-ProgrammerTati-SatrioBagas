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
        Schema::create('table_provinsi', function (Blueprint $table) {
            $table->id();
            $table->integer('code')->nullable();
            $table->string('name')->nullable();
            $table->string('coordinate_x')->nullable();
            $table->string('coordinate_y')->nullable();
            $table->string('google_place_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_provinsi');
    }
};
