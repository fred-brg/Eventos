<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;

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


        return view('admin.homeEventos', compact('qtdAtivos','qtdFinalizados'));
    }

    public function formEvento()
    {
        return view('admin.novoEventoForm');
    }

    public function addEvento(Request $request, Evento $evento)
    {
        $evento->nome = $request->nomeEvento;

        dd($evento->nome);

    }
}
