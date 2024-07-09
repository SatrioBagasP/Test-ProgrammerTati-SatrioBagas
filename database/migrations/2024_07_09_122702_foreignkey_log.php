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
        Schema::table('logharian', function (Blueprint $table) {
            //
            $table->foreignId('isAccBidang')->constrained('status')->nullable();
            $table->foreignId('isAccDinas')->constrained('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('logharian', function (Blueprint $table) {
            //
        });
    }
};
