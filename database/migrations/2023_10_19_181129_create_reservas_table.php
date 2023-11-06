<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->id('idreserva');
            $table->foreignId('idinmueble')->references('idinmueble')->on('inmueble');
            $table->foreignId('idhuesped')->references('idhuesped')->on('huesped');
            $table->integer('fechaini');
            $table->integer('fechafin');
            $table->integer('huespedes');
            $table->string('politicacancelacion');
            $table->integer('montototal');
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
        Schema::dropIfExists('reserva');
    }
};
