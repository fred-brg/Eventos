<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //protected $table = 'Eventos';
    public function qtdEventosAtivos(){
        return $this
                    ->where('ativo', true)
                    ->where('moderador',  auth()->user()->id)
                    ->count();

    }

    public function qtdEventosFinalizados(){
        return $this
                    ->where('ativo', false)
                    ->where('moderador',  auth()->user()->id)
                    ->count();
    }

}
