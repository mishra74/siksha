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
            $table->string('course_name')->nullable();
            $table->string('Admission_Process')->nullable();
            $table->string('Duration')->nullable();
            $table->string('Exam_Type')->nullable();
            $table->string('Course_Fee')->nullable();
            $table->string('list_of_course')->nullable();
            $table->text('avg_salary')->nullable();
            $table->text('min_salary')->nullable();
            $table->text('max_salary')->nullable();
            $table->text('syllabus')->nullable();
            $table->text('Jobs')->nullable();
            $table->text('Job_detail')->nullable();
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
