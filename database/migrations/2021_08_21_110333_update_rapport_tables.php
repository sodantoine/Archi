<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRapportTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('rapports', function (Blueprint $table) {
            $table->foreign('id_pers')->references('id')->on('personnes');    
            $table->foreign('id_projet')->references('id')->on('projets');  
            $table->foreign('id_type_rapport')->references('id')->on('type__rapports');                
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
