<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateChantierTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('chantiers', function (Blueprint $table) {
            $table->foreign('chef_chantier')->references('id')->on('personnes');    
            $table->foreign('auteur_id')->references('id')->on('personnes');  
            $table->foreign('id_projet')->references('id')->on('projets');                  
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
