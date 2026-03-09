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
        Schema::create('attendance', function (Blueprint $table) {
        $table->id('attendance_id');
        $table->unsignedBigInteger('student_id');
        $table->date('date');
        $table->string('status');
        $table->foreign('student_id')->references('student_id')->on('students');
        $table->timestamps();
        });
        }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};
