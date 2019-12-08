<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('comentarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('descripcion');
            $table->dateTime('fecha');

            //Llaves foraneas del usuario que hizo el comentario y del video al que se lo hizo.
            $table->unsignedBigInteger('id_video');
            $table->unsignedBigInteger('id_user');         
            $table->timestamps();


            $table->foreign('id_video')->references('id')->on('videos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
