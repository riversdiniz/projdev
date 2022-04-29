@extends('adminlte::page')
{{-- @section('plugins.jsGrid', true) --}}
@section('title', 'Defeitos')

@section('content_header')
        <div class="card card-success"> 
            <div class="card-header">
                <h3 class="card-title">Boletim Online de Defeitos</h3>
            </div>
            
            <div class="card-body">
                <form>
                    @foreach ($defeitos as $d)
                        <div class="row">
                            <div class="col-sm-3">
                            <div class="form-group">
                            <label>01 - Origem</label>
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
                                <option>{{$d->codlot}}</option>
                            </select>  
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                            <label>Código</label>
                            <select class="form-control" disabled>
                                <option>{{$d->codpro}}</option>
                            </select>
                            </div>   
                            </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                            <label>Produto</label>
                            <select class="form-control" disabled>
                                <option>{{$d->despro}}</option>
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
                      @endforeach
                </form>
            </div>           
        </div>


@endsection

@section('content')

  <div id="jsGrid"></div>

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
            "Código": "{{$d->codpro}}", 
            "QTD Defeito": "{{$d->qtdrfg}}",
            "Descrição Defeito": "{{$d->desetg}}",
            "Fornecedor Processo Origem": "{{$d->desaco}}", 
            },

        ];
        
    @endforeach
    
 
    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",
 
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
 
        data: UsuVdefeito,
 
        fields: [
            { name: "Código", type: "text", width: 100 },
            { name: "QTD Defeito", type: "number", width: 100 },
            { name: "Descrição Defeito", type: "text", width: 150 },
            { name: "Fornecedor Processo Origem", type: "text", width: 200 },
            { type: "control" }
            
        ]
    });
</script>




@endsection



