@extends('adminlte::page')

@section('title', 'Pesquisar')

@section('content_header')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('pages.pesqdef') }}" method="post">
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

    <div class="card-body">
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">BOLETIM DE NÃO CONFORMIDADE</h3>

    </div>
        <div class="card-body">
         
        <form>
                <div class="row">
                    <div class="col-sm-3">
                    <div class="form-group">
                    <label>Origem</label>
                    <select class="form-control">
                        <option>Outros</option>
                        <option>Não Atendimento de OP</option>
                    </select>
                    </div>   
                    </div>

                  @foreach ($pesq as $p)  
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Nº OP</label>
                        <input class="form-control" type="text" placeholder="{{$p->codlot}}" disabled>
                    </div>
                </div>
                 @endforeach
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Código</label>
                        <input class="form-control" type="text" placeholder="" disabled>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Produto</label>
                        <input class="form-control" type="text" placeholder="" disabled>
                    </div>
                </div>


                    <div class="col-sm-2">
                    <div class="form-group">
                    <label>Turno</label>
                    <select class="form-control">
                        <option>1º Turno</option>
                        <option>2º Turno</option>
                    </select>  
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Dectector</label>
                        <input class="form-control" type="text" placeholder="" disabled>
                    </div>
                </div>
        </form>
        
    </div>

    <div class="d-flex justify-content-center">
        
        <div class="container">
            <div class="row align-items-start">
                <div class="col">Quantidade</div>
                <div class="col">Defeito</div>
                <div class="col">Origem</div>
            </div>
             @foreach ($pesq as $p)            
            <div class="row align-items-center">
                <div class="col">{{$p->qtdrfg}}</div>
                <div class="col">{{$p->desdft}}</div>
                <div class="col">{{$p->desaco}}</div>
            </div>
            @endforeach
        </div>

    </div>


    <br>
        <textarea class="form-control" rows="3" placeholder="Considerações do comercial"></textarea>
    <br>

    <div class="card-body">
        <div class="col-sm-12">
                <form>
                         <div class="row">
                            <div class="col-sm-4">
                            <div class="form-group">
                            <label>Ciente SGI</label>
                                <input class="form-control" type="text" placeholder="SGI...">
                            </div>   
                            </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Date:</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                            <label>Ciente Diretoria</label>
                                <input class="form-control" type="text" placeholder="Diretoria...">
                            </div>
                        </div>
                </form>
            </div>

            <div class="card card-info">
                    <div class="card-body">

                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                Se necessário abertura de rnc para investigação das causas e tomada de ações para solução do problema.
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

<button type="button" class="btn btn-success btn-lg btn-block">SALVAR</button>

</div>
    
@endsection




