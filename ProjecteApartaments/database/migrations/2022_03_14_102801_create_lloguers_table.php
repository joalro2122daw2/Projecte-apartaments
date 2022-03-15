<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLloguersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lloguers', function (Blueprint $table) {
            $table->id();
            $table->string('Dni_client');
            $table->string('Codi_únic de l apartament');
            $table->date('Data d inici del lloguer');
            $table->integer('Hora d inici del lloguer');
            $table->date('Data de finalització del lloguer');
            $table->integer('Hora de finalització del lloguer');
            $table->string('Lloc de lliurament de les claus');
            $table->string('Lloc de devolució de les claus');
            $table->integer('Preu per dia');
            $table->boolean('Dipòsit');
            $table->integer('Quantitat del dipòsit');
            $table->enum('Tipus d assegurança', ['Franquícia fins a 1000 Euros', '/Franquíca fins 500 Euros', 'Sense franquícia']);
            $table->integer('Primary_key(Dni_client i Codi_únic)');
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
        Schema::dropIfExists('lloguers');
    }
}
