<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('produit');
            $table->string('voie');
            $table->string('posologie');
            $table->string('forme');
            $table->string('lot');
            $table->string('fabricant');
            $table->string('plante_medicinale')->nullable();
            $table->datetime('date_prise');
            $table->datetime('date_fin_prise');
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
        Schema::dropIfExists('medicaments');
    }
}
