<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',100);
            $table->string('ra',20);
            $table->string('cpf',15);
            $table->bigInteger('tipo')->unsigned();
            $table->foreign('tipo')
                                ->references('id')->on('tipo_participantes')
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
        Schema::dropIfExists('participantes');
    }
}
