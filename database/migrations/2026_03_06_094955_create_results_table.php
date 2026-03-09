<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
        {
        Schema::create('results', function (Blueprint $table) {
        $table->id('result_id');
        $table->unsignedBigInteger('student_id');
        $table->unsignedBigInteger('exam_id');
        $table->unsignedBigInteger('subject_id');
        $table->integer('marks');
        $table->string('grade');
        $table->foreign('student_id')->references('student_id')->on('students');
        $table->foreign('exam_id')->references('exam_id')->on('exams');
        $table->foreign('subject_id')->references('subject_id')->on('subjects');
        $table->timestamps();
        });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
