<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //protected $table = 'Eventos';
    public function qtdEventosAtivos(){
        return $this->where('ativo', true)
                            ->count();

    }

    public function qtdEventosFinalizados(){
        return $this->where('ativo', false)
                            ->count();

    }

}
