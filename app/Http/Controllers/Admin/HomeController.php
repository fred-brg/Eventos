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

        //dd($homeEventos);


        return view('admin.homeEventos', compact('qtdAtivos','qtdFinalizados','homeEventos'));
    }

    public function formEvento()
    {
        return view('admin.novoEventoForm');
    }

    public function addEvento(EventoValidator $request, Evento $evento)
    {
        //$evento->nome = $request->nomeEvento;

        //dd($evento->nome);
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
                            ->with('error',$insert['message']);
        }
    }
}
