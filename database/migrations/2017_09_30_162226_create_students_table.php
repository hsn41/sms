<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('parent_id')->index()->unsigned();
            $table->integer('class_id')->index()->unsigned();
            $table->integer('section_id')->index()->unsigned();
            $table->integer('transport_id')->index()->unsigned();
            $table->string('name');
            $table->string('roll_number');
            $table->string('birthday');
            $table->tinyInteger('gender');
            $table->string('address');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('photo');
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
