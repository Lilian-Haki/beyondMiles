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
        Schema::table('locations', function (Blueprint $table) {
            $table->string('image')->nullable()->after('type');
            $table->text('directions')->nullable()->after('image');
            $table->string('training_hours')->nullable()->after('directions');
            $table->string('training_days')->nullable()->after('training_hours');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropColumn(['image', 'directions', 'training_hours', 'training_days']);
        });
    }
};
