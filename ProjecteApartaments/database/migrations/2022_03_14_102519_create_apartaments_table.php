<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartaments', function (Blueprint $table) {
            $table->id();
            $table->string('Codi_unic');
            $table->string('Referencia catastral');
            $table->string('Ciutat');
            $table->string('Barri');
            $table->string('Nom del carrer');
            $table->integer('Numero del carrer');
            $table->string('Pis');
            $table->integer('Nombre de llits');
            $table->integer('Nombre d habitacions');
            $table->boolean('Ascensor');
            $table->enum('Calefaccio', ['Electrica', 'Gas Natural', 'Buta']);
            $table->boolean('Arie condicionat');
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
        Schema::dropIfExists('apartaments');
    }
}
