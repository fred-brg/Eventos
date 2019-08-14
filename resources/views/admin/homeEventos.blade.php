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

    <div class="panel panel-success col-md-3" >
        <div class="card" >
            <div class="card-body">
                <h3 class="card-title">Seminário</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Data:</b> 07/08/2019</li>
                    <li class="list-group-item"><b>Participantes:</b> 45</li>
                </ul>
            <div class="card-body">
                <a href="#" class="card-link">Detalhes...</a>
            </div>
        </div>
    </div>

@stop
