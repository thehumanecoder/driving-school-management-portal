<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehiclealots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicleallot', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicleid');
            $table->string('vehiclereg');
            $table->string('driverid');
            $table->string('date');
            $table->string('drivername');
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
        {
            Schema::dropIfExists('vehiclealots');
        }
    }
}
