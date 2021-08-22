<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDmpTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('dmps', function (Blueprint $table) {
            $table->foreign('domaine_id')->references('id')->on('domaines');
            $table->foreign('type_mission_id')->references('id')->on('type_missions');
            $table->foreign('auteur_id')->references('id')->on('personnes');
            $table->foreign('expert_id')->references('id')->on('personnes');
            $table->foreign('pat_id')->references('id')->on('partenaires');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
