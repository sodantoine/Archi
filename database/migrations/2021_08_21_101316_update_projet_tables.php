<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProjetTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('projets', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients');   
            $table->foreign('responsable_id')->references('id')->on('personnes');    
            $table->foreign('auteur_id')->references('id')->on('personnes');        
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
