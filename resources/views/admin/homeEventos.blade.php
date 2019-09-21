@extends('adminlte::page')

@section('title', 'Gernciar Eventos')

@section('content_header')
    <h1>Meus eventos</h1>

    <ol class="breadcrumb">
        <ol><a href="#"><i class="fa fa-user"></i> {{auth()->user()->name}}</a></ol>
        <li><a href="#"><i class="fa fa-calendar"></i> Eventos</a></li>
        <li class="active">Meus Eventos</li>
      </ol>
@stop

@section('content')
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-calendar"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Eventos Ativos</span>
                <span class="info-box-number">{{$qtdAtivos}}</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-calendar"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Eventos Finalizados</span>
              <span class="info-box-number">{{$qtdFinalizados}}</span>
            </div>
        </div>
    </div>
</div>
    <p><a href="{{route('novo-evento')}}"><button type="button" class="btn btn-success"><i class="fa fa-calendar-plus-o" ></i> Adicionar Evento</button></a></p>
    @include('admin.includes.alerts')
<div class="row">
    @foreach ($homeEventos as $evento)
    <div class="panel panel-success col col-md-4" style="min-height: 300px" >
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{$evento->nome}}</h3>
            <p class="card-text">{{ substr($evento->descricao, 0, 200)}} "..."</p>
            </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Data: </b> {{date('d-m-Y', strtotime($evento->dataEvento))}}</li>
                    <li class="list-group-item"><b>Participantes:</b> 45</li>
                </ul>
            <div class="card-body">
                <p>
                <a href="{{route('editar-evento',$evento->id)}}"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" ></i> Editar </button></a>
                    <a href="{{route('registrar-presenca',$evento->id)}}"><button type="button" class="btn btn-primary"><i class="fa fa-check-square" ></i> Registrar participantes </button></a>

                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>


@stop
