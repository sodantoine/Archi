<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObligationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obligations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->dateTime('date_save');
            $table->string('intervalle')->nullable();
            $table->integer('projet_id')->unsigned();
            $table->integer('auteur_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obligations');
    }
}
