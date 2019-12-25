<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiemposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiempos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('articulo_id');
            $table->text('comentario');
            $table->datetime('inicio');
            $table->datetime('fin');
            $table->datetime('linea');
            $table->string('tunel_id');
            $table->integer('cantidad');
            $table->decimal('valor');
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
        Schema::dropIfExists('tiempos');
    }
}
