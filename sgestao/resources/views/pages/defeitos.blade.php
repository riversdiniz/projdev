@extends('adminlte::page')

@section('title', 'Defeitos')

@section('content_header')


<div class="card-body">

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">BOLETIM DE NÃO CONFORMIDADE</h3>
    </div>
    
    <div class="card-body">
        <form>
            {{-- @foreach ($defeitos as $d) --}}
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

                <div class="col-sm-2">
                    <div class="form-group">
                    <label>Nº OP</label>
                    <select class="form-control" disabled>
                        <option></option>
                    </select>  
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                    <label>Código</label>
                    <select class="form-control" disabled>
                        <option></option>
                    </select>
                    </div>   
                    </div>

                <div class="col-sm-3">
                    <div class="form-group">
                    <label>Produto</label>
                    <select class="form-control" disabled>
                        <option></option>
                    </select>
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
                    <label>Detector</label>
                    <select class="form-control">
                        <option>River Diniz</option>
                    </select>
                    </div>   
                </div>
                
                {{-- @endforeach --}}
        </form>
    </div>

    <div id="jsGrid"></div>


    <div class="row row-cols-12">
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Revisar 100%</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Retrabalhar</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Autorizar</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Outras Especificar</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Scrapear</label>
            </div>
        </div>
        
    </div>

<br>
    <div class="col-sm-12">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Disposição dos defeitos encontrados</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Quantidade da amostragem:</td>
                        <td>
                            <div class="col-sm">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Devolver para o Processo para mais uma vesão 100%</label>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Quantidade de defeitos detectados pós revisão ou pós retrabalho pelo CQ:</td>
                        <td>
                            <div class="col-sm">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Devolver para o Processo para mais uma vesão 100%</label>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Responsável pela Reinspeção:</td>
                        <td>
                            <label>Outras observações</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    <table>
        <thead>
            <tr></tr>
        </thead>

        <tbody>
            <tr>
                <th>Confirmação de que o rejeito está não conforme (amostragem no rejeito):</th>
            </tr>
            <tr>
                <th>Análise de rejeito CQ. Inspecionadas:____Defeito____(_) REPROVADO - SCRAPEAR</th>
            </tr>
            <tr>
                <th>Ass. REVISADO: PEÇAS OK encontradas:___Peças não conformes encontradas:___SCRAPEAR</th>
            </tr>
        </tbody>
    </table>

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

@section('css')
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
 
@endsection

@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>

<script>
    @foreach ($defeitos as $d)
        var UsuVdefeito = [
            { 
            "Quantidade defeito": "{{$d->qtdrfg}}", 
            "Tipo de Defeito": "{{$d->desdft}}",
            "Origem do defeito": "{{$d->desaco}}",
            },
        ];
        
    @endforeach
    
 
    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",
 
        data: UsuVdefeito,
 
        fields: [
            { name: "Quantidade defeito", type: "number", width: 100 },
            { name: "Tipo de Defeito", type: "text", width: 100 },
            { name: "Origem do defeito", type: "text", width: 150 },
            { name: "Quantidade defeito", type: "number", width: 100 },
            { name: "Tipo de Defeito", type: "text", width: 100 },
            { name: "Origem do defeito", type: "text", width: 150 }
            
        ]
    });
</script>
@endsection