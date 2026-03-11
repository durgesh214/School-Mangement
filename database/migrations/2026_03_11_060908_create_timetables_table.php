<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->string('section');
            $table->string('subject');
            $table->string('teacher');
            $table->string('day');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('room_no');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('timetables');
    }
};