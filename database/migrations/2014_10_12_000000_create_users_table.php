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
        Schema::create('users', function (Blueprint $table) {
//            $table->id();
            $table->unsignedBigInteger('national_code');
            $table->primary('national_code');
            $table->string('f_name');
            $table->string('l_name');
            $table->enum('gender',['male','female']);
            $table->unsignedBigInteger('mobile');
            $table->string('email');
            $table->text('desc');
            $table->text('photo');
            $table->integer('access_level')->default(0);
            $table->string('password');
//            $table->enum('status',['active','inactive','banned'])->default('active');
            //for authentication
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
