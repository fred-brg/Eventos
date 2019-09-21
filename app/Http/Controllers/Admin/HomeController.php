<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;
use App\Http\Requests\EventoValidator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Evento $evento)
    {
        $qtdAtivos = $evento->qtdEventosAtivos();
        $qtdFinalizados = $evento->qtdEventosFinalizados();
        $homeEventos = $evento->homeEventos();

        return view('admin.homeEventos', compact('qtdAtivos','qtdFinalizados','homeEventos'));
    }

    public function formEvento()
    {
        return view('admin.novoEventoForm');
    }

    public function addEvento(EventoValidator $request, Evento $evento)
    {
        $evento->nome = $request->nome;
        $evento->descricao = $request->descricao;
        $evento->dataEvento = $request->dataEvento;
        $evento->moderador = auth()->user()->id;
        $evento->ativo = ($request->ativo == true ? true : false);

        $insert = $evento->saveEvento();
        if($insert['success'])
        {
            return redirect()
                            ->route('novo-evento')
                            ->with('success', $insert['message']);
        }
        else{
            return redirect()
                            -> back()
                            -> with('error',$insert['message']);
        }
    }
    public function editarEvento($id, Evento $evento)
    {
        $request = $evento->getEventoID($id);
        
        if(empty($request[0]))
        {
            $message = 'Evento não encontrado';
            return redirect()
                            -> route('admin')
                            -> with('error',$message);
        }
        else
        {
            return view('admin.updateEventoForm', compact('request'));
        }
    }
    public function updateEvento(EventoValidator $request, Evento $evento)
    {
        $evento = Evento::findOrFail($request->id);
        $evento->nome = $request->nome;
        $evento->descricao = $request->descricao;
        $evento->dataEvento = $request->dataEvento;
        $evento->moderador = auth()->user()->id;
        $evento->ativo = ($request->ativo == true ? true : false);

        $update = $evento->updateEvento();
        if($update['success'])
        {
            return redirect()
                            ->route('editar-evento',['id' => $evento->id])
                            ->with('success', $update['message']);
        }
        else{
            return redirect()
                            -> back()
                            -> with('error',$update['message']);
        }

    }

    public function registrarPresenca($id, Evento $evento){
        $request = $evento->getEventoID($id);
        
        if(empty($request[0]))
        {
            $message = 'Evento não encontrado';
            return redirect()
                            -> route('admin')
                            -> with('error',$message);
        }
        else
        {
            return view('admin.registrarPresenca', compact('request'));
        }
    }
}
