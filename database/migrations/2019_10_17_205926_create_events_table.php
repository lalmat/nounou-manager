<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_user_id');
            $table->unsignedBigInteger('nurse_person_id');
            $table->unsignedBigInteger('event_type_id');
            $table->date('date');
            $table->boolean('day');
            $table->float('hours', 4, 2);
            $table->string('comment');
            $table->timestamps();

            $table->foreign('parent_user_id')->references('id')->on('users');
            $table->foreign('nurse_person_id')->references('id')->on('people');
            $table->foreign('event_type_id')->references('id')->on('event_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
