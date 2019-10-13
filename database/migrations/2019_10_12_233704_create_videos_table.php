<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->time('duracion');
            $table->text('descripcion');
            $table->enum('calificacion', [1,2,3,4,5]);
            $table->integer('visitas');
            $table->dateTime('fecha_publicacion');

            //Llaves foraneas categoria y autor del video
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('categoria_id')
                  ->references('id')->on('categorias');
                  
            $table->foreign('user_id')
                  ->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
