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
            $table->unsignedBigInteger('instructor');
            $table->char('name');
            $table->char('code')->unique();
            $table->char('semester');
            $table->char('year');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->tinyInteger('duration');
            $table->timestamp('midterm_exam');
            $table->timestamp('final_exam');
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
