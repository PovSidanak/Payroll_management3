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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('email');
            $table->string('phone');
            $table->integer('position_id');
            $table->integer('academic_year_id') ->nullable();
            $table->integer('degree_id');
            $table->string('start_date');
            $table->integer('department_id');
            $table->integer('course_id');
            $table->integer('main_salary_id');
            $table->integer('hour_salary_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
