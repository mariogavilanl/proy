<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('bitacora', function (Blueprint $table) {
            
            $table->increments('id');
            $table->date('fecha_solicitud');
            $table->string('quien_soliita');
            $table->string('via_de_solicitud');
            $table->dateTime('hora_de_solicitud');
            $table->longText('descripcion');
            $table->string('usuario');
            $table->string('anexo');
            $table->string('piso');
            $table->string('area');
            $table->string('estado');
            $table->longText('solucion');
            $table->boolean('pendiente');
            $table->string('tecnico_responsable');
            $table->date('fecha_termino');
            // llaves foraneas
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->rememberToken();
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
        Schema::drop('bitacora');

    }
}

