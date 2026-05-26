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
         Schema::create('courses', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug'); 
        $table->string('image');
        $table->decimal('price', 8, 2);
        $table->string('instructor_name');
        $table->string('duration');
        $table->integer('student_count')->default(0);
        $table->integer('rating')->default(5);
        $table->integer('review_count')->default(0);
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
