<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cliente_id');
            $table->integer('nro_orden');
            $table->text('descrip');
            $table->integer('uni_emq');
            $table->integer('uni_ped');
            $table->integer('fact');
            $table->string('correlativo');
            $table->integer('lote');
            $table->date('fecha_ela');
            $table->date('fecha_desp');
            $table->text('dato1');
            $table->text('dato2');
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
        Schema::dropIfExists('seguimientos');
    }
}
