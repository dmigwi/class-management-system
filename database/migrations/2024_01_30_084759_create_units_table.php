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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instructor')->nullable();
            $table->char('name');
            $table->char('code')->unique();
            $table->char('semester')->nullable();
            $table->char('year')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->tinyInteger('duration')->nullable();
            $table->timestamp('midterm_exam')->nullable();
            $table->timestamp('final_exam')->nullable();
            $table->timestamps();
            $table->foreign('instructor')->nullable()->constrained()->references('id')->on('users')->onDelete('set null');
            $table->index('code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
