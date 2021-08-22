<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dmps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('titre')->unique();
            $table->string('initiateur')->unique();
            $table->text('description');
            $table->dateTime('date_publication');
            $table->dateTime('date_fin');
            $table->dateTime('date_save');
            $table->string('lieu_depot');
            $table->time('heure_lance');
            $table->time('heure_fin');
            $table->text('deposer');
            $table->text('gagner');
            $table->text('source_finance');
            $table->integer('domaine_id')->unsigned();
            $table->integer('type_mission_id')->unsigned();
            $table->integer('expert_id')->unsigned();
            $table->integer('auteur_id')->unsigned();
            $table->integer('pat_id')->unsigned();


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
        Schema::dropIfExists('dmps');
    }
}
