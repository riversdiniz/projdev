@extends('adminlte::page')

@section('title', 'Pesquisar')

@section('content_header')

    <style>

        .b {
            border: 1px solid rgba(163, 161, 161, 0.397);
        }

    </style>
    
@endsection

@section('content')

<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title"></h3>
    </div>
    <br>
    <br>
    <h3 class="text-center display-6">ANÁLISE CRÍTICA DE OP</h3>
    <br>
    <br>
    
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('pages.defeitos') }}" method="post">
            @csrf
            <div class="input-group">
            <input type="text" name="search" class="form-control form-control-lg" placeholder="Consulta Nº OP">
            <div class="input-group-append">
            <button type="submit" class="btn btn-lg btn-default"><i class="fa fa-search"></i></button>
            </div>
            </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    
</div>


@endsection

@section('footer')

    <div class="float-right d-none d-sm-block">
    <b>Versão</b> 1.0.0
    </div>
    <strong>Copyright © 2022 <a href="#">Impressora Amazonense Ltda</a>.</strong> Todos os direitos reservados.

@endsection