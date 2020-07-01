<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('intitule');
            $table->string('code');
            $table->string('credits');
            $table->unsignedBigInteger('semestre_id')->index();
            //$table->unsignedBigInteger('duree_id')->index();
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
        Schema::dropIfExists('ues');
    }
}
