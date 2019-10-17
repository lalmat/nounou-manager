<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurseCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_costs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('child_id');
            $table->unsignedBigInteger('nurse_person_id');
            $table->unsignedTinyInteger('weekday');
            $table->float('hour_price', 6, 2);
            $table->float('lunch_price', 6, 2);
            $table->float('snack_price', 6, 2);
            $table->string('devise')->default('€');
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
        Schema::dropIfExists('nurse_parent_costs');
    }
}
