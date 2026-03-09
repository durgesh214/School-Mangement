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
    Schema::create('students', function (Blueprint $table) {
    $table->id('student_id');
    $table->string('student_name');
    $table->string('gender');
    $table->date('date_of_birth');
    $table->string('class');
    $table->string('section');
    $table->string('address');
    $table->string('phone');
    $table->date('admission_date');
    $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
