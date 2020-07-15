<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuivisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suivis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('apparition_effet');
            $table->datetime('disparition_effet');
            $table->string('readministration')->nullable();
            $table->string('reapparition')->nullable();
            $table->string('traitement_correcteur')->nullable();
            $table->string('suivi_patient');
            $table->string('evolution');
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
        Schema::dropIfExists('suivis');
    }
}
