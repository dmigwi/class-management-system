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
            $table->id();
            $table->char('title');
            $table->char('firstname');
            $table->char('middlename')->nullable();
            $table->char('lastname');
            $table->char('password');
            $table->enum('role', ['admin', 'student', 'instructor']);
            $table->char('email')->unique();
            $table->char('phone');
            $table->string('faculty');
            $table->char('country');
            $table->boolean('is_confirm_password');
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
