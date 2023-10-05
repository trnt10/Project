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
        Schema::create('attemps', function (Blueprint $table) {
            $table->id('attemp_id');
            $table->date('attemp_date');
            $table->time('attemp_timestamp');
            // $table->string('attemp_longgitude');
            // $table->string('attemp_latitude');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attemps');
    }
};
