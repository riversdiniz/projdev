@extends('adminlte::page')

@section('title', 'Status de OP')
    
@section('content_header')

    <style>
        div {
            border: 1px solid rgba(163, 161, 161, 0.397);
        }
    </style>

@endsection

@section('content')

    <div class="card-body">
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">STATUS DE PRODUÇÃO - EM DESENVOLVIMENTO</h3>

    </div>
        <div class="card-body">

  <div class="row">
    <div class="col-8 "><strong>LINHA:X LINHA01:EMBALAGEM</strong></div>
    <div class="col-8">BIC9309117 - INNER SOLEIL 12X2 AMH</div>
    <div class="col-4 text-success text-center"><strong>STATUS: PRODUZINDO</strong></div>
    <div class="col-8">1423 - 1090 - 1ºTurno</div>
  </div>
<hr>

  <div class="row row-cols-2 row-cols-lg-7 text-center">
    <div class="col-4 col-lg-1"><strong>META TOTAL</strong></div>
    <div class="col-4 col-lg-1"><strong>PRODUÇÃO TOTAL</strong></div>
    <div class="col-4 col-lg-2"><strong>RESULTADO TURNO</strong></div>
    <div class="col-4 col-lg-2"><strong>PERFORMANCE Acumulada</strong></div>
    <div class="col-4 col-lg-2"><strong>FPY Acumulado</strong></div>
    <div class="col-4 col-lg-2"><strong>PERFORMANCE Hora</strong></div>
    <div class="col-4 col-lg-2"><strong>FPY Hora</strong></div>
  </div>
<hr>
<div class="row row-cols-2 row-cols-lg-7 text-center">
    <div class="col-4 col-lg-1">20.000</div>
    <div class="col-4 col-lg-1">16.800</div>
    <div class="col-4 col-lg-2">301</div>
    <div class="col-4 col-lg-2">100%</div>
    <div class="col-4 col-lg-2">100%</div>
    <div class="col-4 col-lg-2">100%</div>
    <div class="col-4 col-lg-2">100%</div>
  </div>
  <br>
  <div class="row">
      <div class="col-lg-4 col-4">
            <div class="small-box bg-info">
                @foreach ($status as $s)
                @endforeach
                <div class="inner">
                    <h3>OP: {{$s->codlot}}</h3>
                    
                    <p>Quantidade Produto: {{$s->qtdre1}}</p>
                    
                    <p>Quantidade Produzinda: {{$s->qtdrfg}}</p>
                    
                    <p>Dias Parado: {{$s->qtdrfg}}</p>
                </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="{{ route('pages.defeitos') }}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-4">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>OP:</h3>
                    <p>...</p>
                </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="{{ route('pages.defeitos') }}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-4">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>OP:</h3>
                    <p>...</p>
                </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="{{ route('pages.defeitos') }}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>


        </div>
      </div>
  </div>

</div>
</div>




@endsection