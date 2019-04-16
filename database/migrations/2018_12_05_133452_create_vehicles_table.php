<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->string('registration');
            $table->string('rcno');
            $table->string('poc');
            $table->string('fitness');
            $table->string('color');
            $table->string('chesis');
            $table->string('isf');
            $table->string('image');
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
        Schema::dropIfExists('vehicles');
    }

    /**
     * This code is developed under client project section of 
     * Arch Technologies & Media ,Bhubaneswar,Odisha
     * Visit https://archtechnologies.co.in
     * or mail to 
     * info@archtechnologies.co.in
     * or
     * support@archtechnologies.co.in
     * 
     * Developer Name- Biswas Sampad Satpathy
     * email-biswas@archtechnologies.co.in
     * mob-7008787850/7894646994
     */
}
