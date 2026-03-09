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
        Schema::create('schools', function (Blueprint $table) {
        $table->id('school_id');
        $table->string('school_name');
        $table->string('address');
        $table->string('phone');
        $table->string('email');
        $table->string('principal_name');
        $table->timestamps();
        });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
