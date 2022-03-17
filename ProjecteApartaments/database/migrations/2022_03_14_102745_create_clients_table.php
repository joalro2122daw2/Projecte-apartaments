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
            $table->string('Dni_client');
            $table->primary('Dni_client');
            $table->string('Nomcognoms');
            $table->integer('Edat');
            $table->integer('Telèfon');
            $table->string('Adreça');
            $table->string('Ciutat');
            $table->string('Pis');
            $table->string('Email');
            $table->enum('Tipustargeta', ['Dèbit', 'Crèdit']);
            $table->integer('Númerotargeta');
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
