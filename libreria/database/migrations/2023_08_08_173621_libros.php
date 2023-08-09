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
        //
        Schema::create('libros', function (Blueprint $table) {
            $table->engine = "InnoDB"; // Establece el motor de almacenamiento de la tabla en InnoDB.
            $table->bigIncrements('id'); // Crea una columna de clave primaria autoincremental de tipo BIGINT.
            $table->bigInteger('categoria_id')->unsigned(); // Crea una columna de tipo BIGINT sin signo para la clave externa de categoría.
            $table->string('nombre'); // Crea una columna de tipo VARCHAR para el nombre del libro.
            $table->timestamps(); // Crea automáticamente columnas de registro de fecha y hora para la creación y actualización.
            // Crea una restricción de clave externa que relaciona la columna 'categoria_id' en la tabla 'libros'
            // con la columna 'id' en la tabla 'categorias' y establece la acción de eliminación en cascada.
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
