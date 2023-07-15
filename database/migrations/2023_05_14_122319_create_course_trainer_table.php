<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_trainer', function (Blueprint $table) {
            // $table->unsignedBigInteger('trainer_id');
            // $table->unsignedBigInteger('course_id');
            // $table->foreign('course_id')->on('course')->references('id')->onDelete('cascade');
            // $table->foreign('trainer_id')->on('trainer')->references('id')->onDelete('cascade');
            
            $table->id();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->foreignId('trainer_id')->constrained()->cascadeOnDelete();
            $table->text('note');
            $table->timestamps(); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_trainer');
    }
};
