@extends('adminlte::page')

@section('title', 'ver')

@section('content_header')
   <h1>
       Minhas Páginas
       <a href="pages.show" class="btn btn-sm btn-success">Nova Pagina</a>
   </h1>
@endsection

@section('content')
            <div class="card-header">
                <h3 class="card-title">DESC PRODUTO QUALIDADE</h3>
            </div>

            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Nº OP</th>
                            <th>Produto</th>
                            <th>Código</th>
                            <th>Quantidade Defeito</th>
                            <th>Descrição Defeito</th>
                            <th>Forcenedor P.O</th>
                            <th>PEDIDO DA OP</th>
                            <th>PEÇAS CONFORME</th>
                            <th>PERDAS DA OP</th>
                            <th>Quantidade Total</th>
                         </tr>
                    </thead>

                    <tbody>

                        @foreach ($defeitos as $d)
                            <tr>
                                <td>{{$d->codlot}}</td>
                                <td>{{$d->despro}}</td>
                                <td>{{$d->codpro}}</td>
                                <td>{{$d->qtdrfg}}</td>
                                <td>{{$d->desdft}}</td>
                                <td>{{$d->despro}}</td>
                                <td>{{$d->codpro}}</td>
                                <td>{{$d->desdft}}</td>
                                <td>{{$d->qtdprv}}</td>
                                <td>{{$d->totrfg}}</td>
                            </tr>
                            
                        @endforeach

                    </tbody> 
                </table>
            </div>
        </div>

        {{-- {{ $defeitos->links() }} --}}
@endsection



