<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('Dni_client');
            $table->string('Nom i cognoms');
            $table->integer('Edat');
            $table->integer('Telèfon');
            $table->string('Adreça');
            $table->string('Ciutat');
            $table->string('Pis');
            $table->string('Email');
            $table->enum('Tipus de targeta', ['Dèbit', 'Crèdit']);
            $table->integer('Número de targeta');
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
        Schema::dropIfExists('clients');
    }
}
