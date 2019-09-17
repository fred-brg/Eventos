<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',255);
            $table->text('descricao');
            $table->date('dataEvento');
            $table->bigInteger('moderador')->unsigned();
            $table->foreign('moderador')
                                        ->references('id')->on('users')
                                        ->onDelete('cascade');
            $table->boolean('ativo',true);
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
        Schema::dropIfExists('eventos');
    }
}
