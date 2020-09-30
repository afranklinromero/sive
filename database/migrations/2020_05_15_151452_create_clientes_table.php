<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //para db relacional
            
            $table->bigIncrements('id');
            $table->string('cinit', 16);
            $table->string('nombres', 32);
            $table->string('apellidos', 32);
            //$table->string('email', 64);
            $table->string('telefono', 16);
            $table->string('direccion', 128);
            $table->tinyInteger('estado');
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
        Schema::dropIfExists('clientes');
    }
}
