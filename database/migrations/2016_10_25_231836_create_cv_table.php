<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cv_num');
            $table->integer('jrvsCerradas')->nullable();//la mañana
            $table->integer('jrvsAbiertas')->nullable();//para la tarde
            $table->string('objApertura')->nullable();
            $table->string('objCierre')->nullable();
            $table->integer('munis_id')->unsigned();
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
        Schema::dropIfExists('cvs');
    }
}
