@extends('adminlte::page')

@section('title', 'Qualidade')

@section('content_header')

<form action="defeitos">
    <div class="input-group">
            <input type="search" class="form-control form-control-lg" placeholder="Digite aqui o Código da OP">
        <div class="input-group-append">
            <button type="submit" class="btn btn-lg btn-default">
        <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
</form>


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
        var UsuVdefeito = [
            { 
            "Nº OP": "", 
            "Produto": "", 
            "Código": "", 
            "QTD Defeito": "",
            "Descrição Defeito": "",
            "Fornecedor Processo Origem": "", 
            },
        ];
        
    
 
    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",
 
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
 
        data: UsuVdefeito,
 
        fields: [
            { name: "Nº OP", type: "text", width: 70 },
            { name: "Produto", type: "text", width: 200 },
            { name: "Código", type: "text", width: 100 },
            { name: "QTD Defeito", type: "number", width: 100 },
            { name: "Descrição Defeito", type: "text", width: 150 },
            { name: "Fornecedor Processo Origem", type: "text", width: 200 },
            { type: "control" }
            
        ]
    });
</script>

@endsection



