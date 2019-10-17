<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('child_id');
            $table->unsignedBigInteger('nurse_person_id');
            $table->unsignedTinyInteger('weekday');
            $table->float('hours', 4, 2);
            $table->boolean('lunch');
            $table->boolean('snack');
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
        Schema::dropIfExists('day_templates');
    }
}
