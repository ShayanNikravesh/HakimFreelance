<?php

use Binafy\LaravelUserMonitoring\Utills\UserUtils;
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
        Schema::create(config('user-monitoring.action_monitoring.table'), function (Blueprint $table) {
            $table->id();
            $table->string('action_type');
            $table->string('table_name');
            $table->string('browser_name');
            $table->string('platform');
            $table->string('device');
            $table->string('ip');
            $table->text('page');
            $table->timestamps();
            $table->unsignedBigInteger('new_column_id');
            #One to One (Polymorphic)
            $table->unsignedBigInteger('consumer_id')->nullable();
            $table->string('consumer_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(config('user-monitoring.action_monitoring.table'));
    }
};
