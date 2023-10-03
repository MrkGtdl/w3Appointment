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
        Schema::table('users', function (Blueprint $table) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('gender')->after('mobile_phone');
                $table->date('birthday')->after('gender')->nullable();
                $table->string('type')->after('birthday');
                $table->dateTime('date_posted')->after('type')->default(NOW());
                $table->integer('posted_by')->after('date_posted')->nullable();
                $table->string('profession')->after('posted_by')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
