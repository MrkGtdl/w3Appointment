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
        Schema::create('schedule', function (Blueprint $table) {
            $table->id('schedule_id');
            $table->foreignId('user_id');
            $table->time('time_from');
            $table->time('time_to');
            $table->integer('location')->nullable();
            $table->tinyInteger('mon')->nullable();
            $table->tinyInteger('tue')->nullable();
            $table->tinyInteger('wed')->nullable();
            $table->tinyInteger('thu')->nullable();
            $table->tinyInteger('fri')->nullable();
            $table->tinyInteger('sat')->nullable();
            $table->tinyInteger('sun')->nullable();
            $table->dateTime('posted_date')->default(now());
            $table->string('type');
            $table->integer('interval');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule');
    }
};
