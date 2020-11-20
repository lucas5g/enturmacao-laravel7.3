<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('registration');
            $table->string('name');
            $table->string('veteran_noob');
            $table->string('previous_class');
            $table->string('genre');
            $table->string('shift');
            $table->string('situation');
            $table->string('city');
            $table->integer('shift_id');
            $table->integer('average');
            $table->integer('course_id');
            $table->integer('period_id');
            $table->string('origin_school');
            $table->integer('year');            
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
        Schema::dropIfExists('students');
    }
}
