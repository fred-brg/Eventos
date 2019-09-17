<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoAsParticipanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_as_participante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('evento_id')->unsigned();
            $table->foreign('evento_id')
                                        ->references('id')->on('eventos')
                                        ->onDelete('cascade');
            $table->bigInteger('participante_id')->unsigned();
            $table->foreign('participante_id')
                                            ->references('id')->on('participantes')
                                            ->onDelete('cascade');
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
        Schema::dropIfExists('evento_as_participante');
    }
}
