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
        Schema::create('brokers', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->unsignedBigInteger('mobile');
            $table->enum('gender',['male','female']);
            $table->unsignedBigInteger('national_code');
            $table->text('desc');
            $table->string('address');
            $table->text('photo');
            $table->string('password');
            $table->enum('status',['active','inactive','banned'])->default('active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('broker');
    }
};
