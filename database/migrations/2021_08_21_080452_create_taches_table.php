<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref');
            $table->text('acte');
            $table->string('rendement');
            $table->string('criticite');
            $table->string('dosage');
            $table->dateTime('dead_line');
            $table->integer('id_chantier')->unsigned();
            $table->integer('id_resp')->unsigned();
            $table->integer('id_auteur')->unsigned();
            $table->integer('id_validateur')->unsigned();
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
        Schema::dropIfExists('taches');
    }
}
