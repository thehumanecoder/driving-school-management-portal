<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingallotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainingallots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alotid');
            $table->string('customerid');
            $table->string('trainingtime');
            $table->string('trainingdate');
            $table->string('pickupaddr');
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
        Schema::dropIfExists('trainingallots');
    }
}
