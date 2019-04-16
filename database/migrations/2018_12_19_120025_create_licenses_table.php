<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cid');
            $table->string('father')->nullable();
            $table->string('dob')->nullable();
            $table->string('validity')->nullable();
            $table->string('catagory');
            $table->string('llno')->nullable();
            $table->string('mobile')->nullable();
            $table->string('application')->nullable();
            $table->string('slotdate')->nullable();
            $table->string('firstnot')->nullable();
            $table->string('secondnot')->nullable();
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
        Schema::dropIfExists('licenses');
    }
}
