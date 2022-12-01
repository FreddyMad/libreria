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
        Schema::create('tb_libros', function (Blueprint $table) {
            $table->bigIncrements('idLibro');
            $table->string('titulo', 100);
            $table->integer('isbn');
            $table->unsignedBigInteger('autor_id');
            $table->integer('paginas');
            $table->string('editorial', 50);
            $table->string('email');
            $table->timestamps();

            $table->foreign('autor_id')->references('idAutor')->on('tb_autores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_libros');
    }
};
