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
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('college_name')->nullable();
            $table->string('place')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('study_mode')->nullable();
            $table->string('exam')->nullable();
            $table->string('institute_type')->nullable();
            $table->text('courses_id')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colleges');
    }
};
