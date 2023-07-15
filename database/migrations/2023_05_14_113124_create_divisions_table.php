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
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // السنة ,الشهر , id //=> 1
            $table->bigInteger('price');
            $table->bigInteger('hours_number');
            $table->bigInteger('min_student_to_open');
            $table->enum('status' ,['pending_progressing', 'information_meeting', 'in_progress', 'finished', 'closed'])->default('pending_progressing');
            $table->foreignId('course_id')->nullable();
            $table->foreignId('trainer_id')->nullable();
            $table->date('finished_at');
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
        Schema::dropIfExists('divisions');
    }
};
