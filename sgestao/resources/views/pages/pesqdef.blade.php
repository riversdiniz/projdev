@extends('adminlte::page')

@section('title', 'Pesquisar')

@section('content_header')

    <style>

        .b {
            border: 1px solid rgba(163, 161, 161, 0.397);
        }

    </style>
    

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
         <div class="container">
        <form>
                <div class="row rounded b">
                    <div class="col-sm-3 text-center">
                    <div class="form-group">
                    <label>Origem</label>
                        <select class="form-control">
                            <option>Outros</option>
                            <option>Não Atendimento de OP</option>
                        </select>
                    </div>   
                    </div>
                    @foreach ($pesq as $p)
                    @endforeach
                <div class="col-sm-2 text-center">
                    
                    <div class="form-group">
                        <label>Nº OP</label>
                        <input class="form-control" type="text" placeholder="{{$p->codlot}}" disabled>
                    </div>
                    
                </div>

                <div class="col-sm-2 text-center">

                    <div class="form-group">
                        <label>Código</label>
                        <input class="form-control" type="text" placeholder="{{$p->codpro}}" disabled>
                    </div>

                </div>

                <div class="col-sm-3 text-center">

                    <div class="form-group">
                        <label>Produto</label>
                        <input class="form-control" type="text" placeholder="{{$p->despro}}" disabled>
                    </div>

                </div>
                 

                    <div class="col-sm-2 text-center">
                    <div class="form-group">
                    <label>Turno</label>
                    <select class="form-control">
                        <option>1º Turno</option>
                        <option>2º Turno</option>
                    </select>  
                    </div>
                </div>

                <div class="col-sm-3">

                </div>

                <div class="col-sm-3 text-center">
                    <div class="form-group">
                        <label>Detector</label>
                        <select class="form-control">
                            <option></option>
                            <option>João Carlos</option>
                            <option>Gerson Muniz</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3 text-center">
                    <div class="form-group">
                        <label>Visto</label>
                        <select class="form-control">
                            <option></option>
                            <option>Nome UM</option>
                            <option>Nome DOIS</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">

                </div>
        </form>
         </div>
        
    </div>
        <br>
        <div class="text-center">
            <label>Quantidade - Descrição - ORIGEM</label>
        </div>
    <div class="container">
        
        <div class="row row-cols-3 row-cols-lg-3 rounded b">
            <div class="col text-center"><strong>Quantidade</strong></div>
            <div class="col text-center"><strong>Defeito</strong></div>
            <div class="col text-center"><strong>Origem</strong></div>
            @foreach ($pesq as $p)
            <div class="col text-center">{{$p->qtdrfg}}</div>
            <div class="col text-center">{{$p->desdft}}</div>
            <div class="col text-center">{{$p->desaco}}</div>
            @endforeach
            <div class="col-4 col-lg-4 text-center"><strong>Pedido da OP: {{$p->qtdprv}}</strong></div>
            <div class="col-4 col-lg-4 text-center"><strong>Peças Conforme: {{$p->qtdre1}}</strong></div>
            <div class="col-4 col-lg-4 text-center"><strong>Perdas da OP: {{$p->totrfg}}</strong></div>
            
        </div>
    </div>
        <br>
        <div class="text-center">
            <label>Análise critica do CQ</label>
        </div>
    <div class="container rounded b">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 text-center">
            <div class="col">
                <div class="form-group">
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label text-center">Revisar 100%</label>
                        </div>
                    </div>
            </div>

            <div class="col">
                <div class="form-group">
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label text-center">Retrabalhar</label>
                        </div>
                    </div>
            </div>

            <div class="col">
                <div class="form-group">
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label text-center">Autorizar</label>
                        </div>
                    </div>
            </div>

            <div class="col">
                <div class="form-group">
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label text-center">Scrapear</label>
                        </div>
                    </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <div class="form-check">
                        <br>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label text-center">Especificar</label>
                    </div>
                </div>
            </div>
        </div>
<br>
        <div class="row justify-content-md-center">
            <div class="col col-lg-2"></div>
                <div class="col-md-auto">
                    <div class="form-group  text-center">
                        <label>Responsável</label>
                        <select class="form-control">
                            <option></option>
                            <option>Nome CQ UM</option>
                            <option>Nome CQ DOIS</option>
                        </select>
            </div>
                </div>
                <div class="col col-lg-2"></div>
            </div>
        </div>
        <br>        
        <div class="text-center">
            <label>Reinspeção da Revisão 100% ou RETRABALHO</label>
            <br>
        </div>

       <div class="container rounded b">
        <div class="row">
            <div class="col"></div>
            <div class="col">
            <br>
            <p>Disposição dos efeitos encontrados</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
            Quantidade da amostragem:
            <input type='number' id='filhos' name='filhos'>          
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label text-center">REJEITAR TUDO - Enviar para a coleta seletiva - SCRAP</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
            Quantidade de defeitos detectados pós revisão ou pós retrabalho pelo CQ:
            <input type='number' id='filhos' name='filhos'>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label text-center">Devolver para o PROCESSO para mais uma REVISÃO 100%</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
            
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label text-center">Devolver para o PROCESSO para mais uma REVISÃO 100%</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
             Responsável pela Reinspeção:
                <select class="form-control">
                    <option></option>
                    <option>Nome Responsável UM</option>
                    <option>Nome Responsável DOIS</option>
                </select>
            </div>

            <div class="col">
                <label for="msg">Outros</label>
                <textarea id="msg" name="msg" rows="4" cols="70"></textarea>
            </div>
        </div>

       </div>

    <br>
        <div class="container rounded b">
            <div class="text-center">
                <br>
                <label>Considerações do comercial</label>
                <textarea class="form-control" rows="3"></textarea>
                <br>
            </div>
        </div>
        
    <br>

    <div class="container rounded b">
    <div class="card-body">
        <div class="col-sm-12 text-center">
                <form>
                         <div class="row">
                            <div class="col-sm-4 ">
                            <div class="form-group">
                            <label>Ciente SGI</label>
                                <input class="form-control" type="text" placeholder="SGI...">
                            </div>   
                            </div>

                            <div class='col-sm-4'>
                                <div class="form-group">
                                    <label for="data-pagamento">Data</label>
                                    <!-- Datepicker as text field -->         
                                    <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    <div class="input-group-addon" >
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                            <label>Ciente Diretoria</label>
                                <input class="form-control" type="text" placeholder="...">
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

            <div class="text-center">
                <form action="">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
    </div>

</div>
    
@endsection