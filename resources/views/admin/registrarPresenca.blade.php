@extends('adminlte::page')

@section('title', 'Gernciar Eventos')

@section('content_header')
    <h1>Registro de presença</h1>

    <ol class="breadcrumb">
        <ol><a href="#"><i class="fa fa-user"></i> {{auth()->user()->name}}</a></ol>
        <li><a href="#"><i class="fa fa-calendar"></i> Eventos</a></li>
        <li class="active">Meus Eventos</li>
      </ol>
@stop

@section('content')
    <p>Evento: <b>{{$request[0]->nome}}</b></p>
    <p>Data de realização: <b>{{date('d-m-Y',strtotime($request[0]->dataEvento))}}</b></p>
    
    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <span class="fa fa-plus"></span>  Participante
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="container">    
            <div class="panel panel-success col-md-4">
                    <form method="POST" action="{{''}}">
                            {!! csrf_field()!!}
                            <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" class="form-control"  name="nome" placeholder="Digite o nome completo">
                            </div>
                            <div class="form-group">
                                    <label for="ra">RA:</label>
                                    <input type="text" class="form-control"  name="ra" placeholder="Caso seja aluno informe o RA">
                            </div>
                            <div class="form-group">
                                    <label for="cpf">CPF:</label>
                                    <input type="text" class="form-control"  name="cpf" placeholder="Se lembrar do numero informe o CPF">
                            </div>
                            <div class="form-group">
                                    <label for="tipo">Tipo de participante:</label>
                                    <select class="form-control" name="tipo">
                                        <option>Aluno</option>
                                        <option>Professor</option>
                                        <option>Comunidade</option>
                                    </select>
                            </div>
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                    </form>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="panel panel-success col-md-4">
            <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Localizar participante</h3>
                    </div>
                    <div class="card-body">
                            <form method="POST" action="{{}}">
                                    {!! csrf_field()!!}
                                    <div class="form-group">
                                            <label for="nome">Nome, RA ou CPF</label>
                                            <input type="text" class="form-control"  name="termo" placeholder="Digite o Nome, o RA ou o CPF do participante">
                                    </div>
                                    <button type="submit" class="btn btn-success">Buscar</button>
                            </form>
                    </div>
            </div>
        </div>
        <div class="col-md-4">
            
        </div>

    </div>

    <h3>Participantes</h3>
    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Tipo de participante</th>
                <th scope="col">RA / CPF</th>
                <th scope="col">Remover</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>x</td>
              </tr>
            </tbody>
          </table>

@stop
