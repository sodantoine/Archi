<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEngagementTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('engagements', function (Blueprint $table) {
            $table->foreign('id_pers')->references('id')->on('personnes');    
            $table->foreign('auteur_id')->references('id')->on('personnes'); 
            $table->foreign('id_validateur')->references('id')->on('personnes');    
            $table->foreign('id_activite')->references('id')->on('activites');        
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
