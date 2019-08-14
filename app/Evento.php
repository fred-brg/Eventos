<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //protected $table = 'Eventos';
    public function qtdEventosAtivos()
    {
        return $this
                    ->where('ativo', true)
                    ->where('moderador',  auth()->user()->id)
                    ->count();

    }

    public function qtdEventosFinalizados()
    {
        return $this
                    ->where('ativo', false)
                    ->where('moderador',  auth()->user()->id)
                    ->count();
    }

    public function homeEventos()
    {
        return $this
                    ->where('moderador', auth()->user()->id)->get();
    }


    public function saveEvento()
    {
        if ($this->save())
        {
            return [
                'success' => true,
                'message' => 'Evento Cadastrado com sucesso!'
            ];
        }
        else{
            return [
                'success' => false,
                'message' => 'Falha ao cadastrar evento!'
            ];
        }
    }

}
