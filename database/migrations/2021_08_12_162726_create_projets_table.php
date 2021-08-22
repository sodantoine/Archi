<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('duree');
            $table->text('situation');
            $table->string('code')->unique();
            $table->text('description');
            $table->dateTime('date_lance')->nullable();
            $table->time('heure_lance')->nullable();
            $table->integer('niveau')->default(0);
            $table->text('estimation')->nullable();
            $table->dateTime('date_save');
            $table->integer('client_id')->unsigned();
            $table->integer('dmp_id')->unsigned();
            $table->integer('responsable_id')->unsigned();
            $table->integer('auteur_id')->unsigned();
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
        Schema::dropIfExists('projets');
    }
}
