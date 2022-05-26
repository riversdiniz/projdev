@extends('adminlte::page')

@section('title', 'Consultar SALDO')

@section('content_header')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title"></h3>
    </div>
    <br>
    <h3 class="text-center display-6">Consultar Saldo</h3>
    <br>
    <br>
    
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="" method="post">
            @csrf
            <div class="input-group">
            <input type="text" name="search" class="form-control form-control-lg" placeholder="Saldo Produto">
            <div class="input-group-append">
            <button type="submit" class="btn btn-lg btn-default"><i class="fa fa-search"></i></button>
            </div>
            </div>
            </form>
        </div>
    </div>
    <br>
<br>

        <h5 class="text-center"><label>Consulta Saldo de Produtos</label></h5>

        <div class="container text-center">
            <br>
            <div class="row row-cols-4">
              <div class="col"><label>Código do Produto</label></div>
              <div class="col"><label>Código do Deposito</label></div>
              <div class="col"><label>Código Derivação</label></div>
              <div class="col"><label>Quantidade Estoque</label></div>
            </div>
                <div class="row row-cols-4">
                  <div class="col">{{----}}</div>
                  <div class="col">{{----}}</div>
                  <div class="col">{{----}}</div>
                  <div class="col">{{----}}</div>
              </div>
          </div>
    
</div>

@endsection

@section('footer')
    <div class="col-sm-12 text-center">
        <strong>Copyright © 2022 <a href="#">Impressora Amazonense Ltda</a>.</strong> Todos os direitos reservados.
    </div>
@endsection