<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero_dossier');
            $table->string('initial');
            $table->string('age');
            $table->string('sexe');
            $table->string('poids');
            $table->string('taille');
            $table->string('facteur_associe');
            $table->unsignedBigInteger('fiche_id');
            $table->foreign('fiche_id')->references('id')->on('fiches');
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
        Schema::dropIfExists('patients');
    }
}
