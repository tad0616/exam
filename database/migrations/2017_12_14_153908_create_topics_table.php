<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('topic');
            $table->integer('exam_id')->unsigned();
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');
            $table->string('opt1');
            $table->string('opt2');
            $table->string('opt3');
            $table->string('opt4');
            $table->integer('ans')->unsigned();
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
        Schema::dropIfExists('topics');
    }
}
