<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_user_id');
            $table->unsignedBigInteger('nurse_person_id');
            $table->unsignedBigInteger('child_id');
            $table->date('start_on');
            $table->date('finish_on');
            $table->integer('hours');
            $table->integer('vacations');
            $table->text('comments');
            $table->string('file');
            $table->timestamps();

            $table->foreign('parent_user_id')->references('id')->on('users');
            $table->foreign('nurse_person_id')->references('id')->on('people');
            $table->foreign('child_id')->references('id')->on('childs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
