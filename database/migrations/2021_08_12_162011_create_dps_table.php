<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('titre')->unique();
            $table->string('initiateur');
            $table->text('description');
            $table->dateTime('date_publication');
            $table->dateTime('date_fin')->nullable();
            $table->dateTime('date_save')->nullable();
            $table->string('lieu_depot')->nullable();
            $table->time('heure_lance')->nullable();
            $table->time('heure_fin')->nullable();
            $table->text('deposer')->nullable();
            $table->text('gagner')->nullable();
            $table->integer('dmp_id')->unsigned();
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
        Schema::dropIfExists('dps');
    }
}
