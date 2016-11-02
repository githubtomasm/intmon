<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cvs_id')->unsigned();
            $table->integer('cant_proc_ideal');
            $table->integer('cant_proc_real')->default(0);
            $table->longtext('obs')->nullable();
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
        Schema::dropIfExists('procs');
    }
}
