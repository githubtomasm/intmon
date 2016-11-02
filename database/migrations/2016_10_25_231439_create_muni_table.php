<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('munis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('dptos_id')->unsigned();
            // $table->foreignKey('dptos_id')->references('id')->on('dptos');

            // $table->integer('users_id')->unsigned();
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
        Schema::dropIfExists('munis');
    }
}
