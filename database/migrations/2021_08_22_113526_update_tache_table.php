<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTacheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('taches', function (Blueprint $table) {
            $table->foreign('id_validateur')->references('id')->on('personnes');  
            $table->foreign('id_resp')->references('id')->on('personnes');   
            $table->foreign('id_auteur')->references('id')->on('personnes');  
            $table->foreign('id_chantier')->references('id')->on('chantiers');                  
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
