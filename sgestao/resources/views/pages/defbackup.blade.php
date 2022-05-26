@extends('adminlte::page')

@section('title', 'Pesquisar')

@section('content_header')

    <style>

        .b {
            border: 1px solid rgb(0, 0, 0);
        }

        

    </style>

    <div class="row mb-2">
        <div class="col-sm-6">

        </div>
        
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('pages.pesqdef') }}">Voltar</a></li>
        <li class="breadcrumb-item active">Tela de Consulta BNC</li>
        </ol>
        </div>
    </div>

    <div class="row mb-1 text-center">
        <div class="col-sm-12">
           <h1>BOLETIM DE NÃO CONFORMIDADE</h1>
        </div>
    </div>

    <div class="card-body">
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title"></h3>

    </div>
        <div class="card-body">
         <div class="container">
        <form action="#" method="post">
            @csrf
                <div class="row rounded">
                    <div class="col-sm-3 text-center">
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
                <div class="col-sm-2 text-center">
                    
                    <div class="form-group">
                        <label>Nº OP</label>
                        <input class="form-control text-center" type="text" placeholder="{{$d->codlot}}" disabled>
                    </div>
                    
                </div>

                <div class="col-sm-2 text-center">

                    <div class="form-group">
                        <label>Código</label>
                        <input class="form-control text-center" type="text" placeholder="{{$d->codpro}}" disabled>
                    </div>

                </div>

                <div class="col-sm-3 text-center">

                    <div class="form-group">
                        <label>Produto</label>
                        <input class="form-control text-center" type="text" placeholder="{{$d->despro}}" disabled>
                    </div>

                </div>
                 

                <div class="col-sm-2 text-center">
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

                        <label>Gerência</label>
                        <select class="form-control text-center">
                            <option></option>
                            <option>Marcos Paulo</option>
                        </select>

                    </div>
                </div>

                <div class="col-sm-3 text-center">
                    <div class="form-group">
                        <label>Visto</label>
                        <select class="form-control text-center">
                            <option></option>
                            <option>João Paulo</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    
                </div>
        </form>
        
    </div>
        
    </div>
        
        <div class="text-center">
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
        <br>
        <div class="text-center">
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
<br>
        <div class="row justify-content-md-center">
            <div class="col col-lg-1"></div>
                <div class="col-md-4">
                    <div class="form-group  text-center">
                        <label>Responsável</label>
                        <select class="form-control text-center">
                            <option></option>
                            <option>Maria Karla</option>
                        </select>
            </div>
                </div>
                <div class="col col-lg-1"></div>
            </div>
            <br>
        </div>
        <br>        
        <div class="text-center">
            <br>
            <label>Reinspeção da Revisão 100% ou RETRABALHO</label>
            <hr>
        </div>

       <div class="container rounded">
        <div class="row">
            <div class="col"></div>
            <div class="col">
            <br>
            <label>Disposição dos efeitos encontrados</label>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="quantity">Quantidade da amostragem:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="5">        
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
                <label for="quantity">Quantidade de defeitos detectados:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="5">
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

        </div>

        <div class="row">
            <div class="col">
             <b>Responsável pela Reinspeção:</b>
             <select class="form-control text-center">
                <option></option>
                <option>João Paulo</option>
            </select>
            </div>
            
            <div class="col">

                <label for="msg">Outros</label>

                <form action="#">
                    <textarea class="form-control" rows="3" name="#" id="#" required></textarea>
                    <br>
                    <input type="submit">
                </form>
                <br>
            </div>
        </div>

       </div>

    <br>
    <form action="#" method="#">
        @csrf
        <div class="container">
            <div class="text-center">
                <label>Considerações do comercial</label>
                <hr>
                <textarea class="form-control" rows="3" name="#" id="#" required></textarea>
                <br>
            </div>
            <br>
        </div>
    </form>
    <div class="text-center">
        <br>
        <label>Conclusão - Aprovação da Disposição</label>
        <hr>
    </div>

    <div class="container rounded">
    <div class="card-body">
        <div class="col-sm-12 text-center">
                <form action="#" method="#">
                    @csrf
                         <div class="row">
                            <div class="col-sm-4 ">
                            <div class="form-group">
                            <label>Ciente SGI</label>
                            <select class="form-control text-center">
                                <option></option>
                                <option>Afonso Souza</option>
                            </select>
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
                            <label>Ciente Diretoria</label>
                            <select class="form-control text-center">
                                <option></option>
                                <option>Val do Santos</option>
                            </select>
                            </div>
                        </div>
                </form>
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
            <br>
            <div class="text-center">
                <form action="">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
    </div>

</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
<script>

    tinymce.init({
        selector:'textarea.bodyfield',
        height:300,
        menubar:false,
        plugins:['link', 'table', 'image', 'autoresize', 'lists'],
        toolbar:'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | table | link image | bullist numlist'

    });

</script>
@endsection