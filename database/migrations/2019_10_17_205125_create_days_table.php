<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('child_id');
            $table->unsignedBigInteger('nurse_person_id');
            $table->date('day');
            $table->float('hours', 4, 2);
            $table->boolean('lunch');
            $table->boolean('snack');
            $table->string('comment');
            $table->timestamps();

            $table->foreign('child_id')->references('id')->on('childs');
            $table->foreign('nurse_person_id')->references('id')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('days');
    }
}
