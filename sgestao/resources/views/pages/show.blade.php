@extends('adminlte::page')

@section('title', 'BNC')

@section('content_header')

<style>

    .b {
        border: 1px solid rgb(0, 0, 0);
    }

    

</style>

<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">BOLETIM DE NÃO CONFORMIDADE</h3>
    </div>

    {{-- <div class="alert alert-dismissible">
        <div class="row">
            @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif
        </div>
    </div> --}}
    <div class="card-body">

    <form action="/pages" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-3">
    
    <div class="form-group">
        <label>Origem</label>
        <select class="form-control text-center">
            <option>Outros</option>
            <option>Não Atendimento de OP</option>
        </select>
    </div>
    </div>

    @foreach ($defeitos as $d)
    @endforeach
    <div class="col-sm-2">
        <div class="form-group">
            <label>Nº OP</label>
            <input class="form-control text-center" type="text" placeholder="{{$d->codlot}}" disabled>
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label>Código</label>
            <input class="form-control text-center" type="text" placeholder="{{$d->codpro}}" disabled>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group">
            <label>Produto</label>
            <input class="form-control text-center" type="text" placeholder="{{$d->despro}}" disabled>
        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group">
            <label>Turno</label>
            <select class="form-control text-center">
                <option>1º Turno</option>
                <option>2º Turno</option>
            </select>  
        </div>
    </div>

    <div class="col-sm-3">

    </div>
    
    
    <div class="col-sm-3 text-center">
        <div class="form-group">
            <label for="title">Gerência</label>
            <input type="text" class="form-control" id="usu_gerencia" name="usu_gerencia" placeholder="">
        </div>
    </div>

    <div class="col-sm-3 text-center">
        <div class="form-group">
            <label for="title">visto</label>
            <input type="text" class="form-control" id="usu_visto" name="usu_visto" placeholder="">
        </div>
    </div>

    <div class="col-sm-3">
        
    </div>
    
    <div class="col-sm-12 text-center">
        <br>
        <label>Quantidade - Descrição - ORIGEM</label>
        <hr>
    </div>

    <div class="container">
        
        <div class="row row-cols-3 row-cols-lg-3 rounded b">
            <div class="col text-center"><strong>Quantidade</strong></div>
            <div class="col text-center"><strong>Defeito</strong></div>
            <div class="col text-center"><strong>Origem</strong></div>
            @foreach ($defeitos as $d)
            <div class="col text-center">{{$d->qtdrfg}}</div>
            <div class="col text-center">{{$d->desdft}}</div>
            <div class="col text-center">{{$d->desaco}}</div>
            @endforeach
            <div class="col-4 col-lg-4 text-center"><strong>Pedido da OP: {{$d->qtdprv}}</strong></div>
            <div class="col-4 col-lg-4 text-center"><strong>Peças Conforme: {{$d->qtdre1}}</strong></div>
            <div class="col-4 col-lg-4 text-center"><strong>Perdas da OP: {{$d->totrfg}}</strong></div>
            
        </div>
    </div>

    <div class="col-sm-12 text-center">
        <br>
        <label>Análise critica do CQ</label>
        <hr>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 text-center">
            <div class="col">
                <div class="form-group">
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label text-center"><strong>Revisar 100%</strong></label>
                        </div>
                    </div>
            </div>

            <div class="col">
                <div class="form-group">
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label text-center"><strong>Retrabalhar</strong></label>
                        </div>
                    </div>
            </div>

            <div class="col">
                <div class="form-group">
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label text-center"><strong>Autorizar</strong></label>
                        </div>
                    </div>
            </div>

            <div class="col">
                <div class="form-group">
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label text-center"><strong>Scrapear</strong></label>
                        </div>
                    </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <div class="form-check">
                        <br>
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label text-center"><strong>Especificar</strong></label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-md-center">
            <div class="col col-lg-1"></div>
                <div class="col-md-4">
                    <div class="form-group  text-center">
                        <label for="title">Responsável</label>
                        <input type="text" class="form-control" id="usu_resp" name="usu_resp" placeholder="">
            </div>
                </div>
                <div class="col col-lg-1"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 text-center">
        <br>
        <label>Reinspeção da Revisão 100% ou RETRABALHO</label>
        <hr>
    </div>

    <div class="container rounded">
        <div class="row">
            <div class="col"></div>
            <div class="col text-center">
            <br>
            <label>Disposição dos efeitos encontrados</label>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <label for="quantity">Quantidade da amostragem:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="5">        
            </div>

            <div class="col">
                <div class="form-check text-center">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label text-center">REJEITAR TUDO - Enviar para a coleta seletiva - SCRAP</label>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col">
                <label for="quantity">Quantidade de defeitos detectados:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="5">
            </div>
            <div class="col text-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label text-center">Devolver para o PROCESSO para mais uma REVISÃO 100%</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col text-center">
             <label for="title">Responsável pela Reinspeção:</label>
                <input type="text" class="form-control" id="usu_resp" name="usu_resp" placeholder="">
            </div>
            
            <div class="col text-center">
                <label for="title">Outros</label>
                    <textarea class="form-control" name="usu_descricao" id="usu_descricao"></textarea>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12 text-center">
        
        <div class="form-group">
            <br>
            <label>Considerações do comercial</label>
            <textarea class="form-control" name="usu_descricao" id="usu_descricao"></textarea>
        </div>
        </div>

        <div class="col-sm-12 text-center">
              <div class="row">
                <div class="col-sm-4 ">
                <div class="form-group">
                <label for="title">Ciente SGI</label>
                    <input type="text" class="form-control" id="usu_sgi" name="usu_sgi" placeholder="">
                </div>   
                </div>

                <div class='col-sm-4'>
                    <div class="form-group">
                        <label for="data-pagamento">Data</label>
                        <!-- Datepicker as text field -->         
                        <div class="input-group date" data-date-format="dd/mm/yyyy">
                        <input  type="date" class="form-control text-center" placeholder="dd/mm/yyyy">
                        <div class="input-group-addon" >
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        </div>
                    </div>
                </div>

            <div class="col-sm-4">
                <div class="form-group">
                <label for="title">Ciente Diretoria</label>
                    <input type="text" class="form-control" id="usu_diretoria" name="usu_diretoria" placeholder="">
                </div>
            </div>
        </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        <strong>Se necessário abertura de rnc para investigação das causas e tomada de ações para solução do problema.<strong>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 text-center">
        <br>
        <input type="submit" name="submit" value="Salvar">
    </div>
    </div>

</div>
    
    </form>
    
    </div>
    
    </div>

@endsection