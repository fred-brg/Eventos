<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    public function saveParticipante(){
        if($this->save()){
            return[
                'success' => true,
                'message' => 'Participante cadastrado e registrado no evento com sucesso'
            ];
        }
        else{
            return [
                'success' => false,
                'message' => 'Falha ao cadastrar Participante'
            ];
        }
    }
}
