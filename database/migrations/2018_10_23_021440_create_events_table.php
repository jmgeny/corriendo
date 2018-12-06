<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');// ## Portada
            $table->date('fecha');// ## Portada
            // $table->integer('city_id')->nullable();// ## Portada

            $table->string('inscripto')->nullable();// ## Evento
            $table->string('resultado')->nullable();// ## Evento
            
            // $table->integer('championship_id');// ## Evento
            $table->unsignedInteger('organizer_id');
            $table->unsignedInteger('sport_id');// ## Evento
            // $table->integer('specification_id')->nullable();// ## Evento
            $table->text('descripcion')->nullable();// ## Evento 
            $table->text('cronograma')->nullable();// ## Evento

            $table->string('direccion')->nullable();// Local Info
            $table->text('llegar_dormir')->nullable();// ## Local Info

            $table->text('contacto')->nullable();// Contacto
            $table->string('inscripcion')->nullable();// Contacto

            $table->timestamps();

            $table->foreign('sport_id')->references('id')->on('sports');
            $table->foreign('organizer_id')->references('id')->on('organizers');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
