<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendriers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jour');
            $table->string('nom_cour');
            $table->string('nom_enseignant');
            $table->string('semestre');
            $table->string('nom_salle');
            $table->string('heure_debut');
            $table->string('heure_fin');
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
        Schema::dropIfExists('calendriers');
    }
}
