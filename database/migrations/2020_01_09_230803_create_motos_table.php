<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('marcas_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table ->string('codigo',13)-> unique()->required(); // es unico
            $table ->string('nombre',150)->require(); // es requerido
            $table ->text('descripcion')->nullable(); // para no poner nada descripcion
            $table ->enum('estado',['activo','suspendido','borrado'])->default('activo');
            $table->timestamps();

            // relaciones
            $table->foreign('marcas_id')->references('id')->on('marcas');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motos');
    }
}
