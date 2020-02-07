<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreataClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('clientes', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('rut')->unique();
      $table->date('fecha');
      $table->text('tipo_cli');
      $table->string('cli_des');
      $table->text('direccion');
      $table->integer('costo');
        //
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
        //
    }
}
