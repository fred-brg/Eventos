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
    <div class="col-md-3">
         @include('admin.includes.alerts')

        <form method="POST" action="{{route('novo-evento')}}">
                {!! csrf_field()!!}
            <div class="form-group">
                <label for="nome">Nome do evento</label>
                <input type="text" class="form-control"  name="nome" placeholder="Nome do Evento" >
            </div>
            <div class="form-group">
                <label for="descricao">Descrição do evento</label>
                <textarea class="form-control" name="descricao" placeholder="Descriação do evento" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="Data">Data do Evento</label>
                <input type="date" class="form-control" name="dataEvento">
            </div>
            <div class="form-group">
                <input type="checkbox" class="fform-check-input" name="ativo" value="on" checked >
                <label for="ativo">Evento Ativo</label>
            </div>

            <button type="submit" class="btn btn-success">Criar Evento</button>
        </form>
    </div>
</div>



@stop
