@extends('adminlte::page')

@section('title', 'Defeitos')

@section('content_header')
    <h1>Página de Defeitos</h1>
@endsection

@section('content')
    
    <div class="card">
            <div class="card-header">
                <h3 class="card-title">DESC PRODUTO QUALIDADE</h3>
            </div>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>OP</th>
                            <th>Produto</th>
                            <th>Código</th>
                            <th>Defeito</th>
                         </tr>
                    </thead>

                    <tbody>

                        @foreach ($defeitos as $d)
                            <tr>
                                <td>{{$d->codlot}}</td>
                                <td>{{$d->despro}}</td>
                                <td>{{$d->codpro}}</td>
                                <td>{{$d->desdft}}</td>
                            </tr>
                        @endforeach
                        {{-- @forelse ($defeitos as $defeito)
                        <tr>
                            <td>{{$defeito->codlot}}</td>
                        </tr>
                            
                        @empty
                        <tr>
                            <td colspan="2">Não Existem cidades cadastradas.</td>
                        </tr>  
                        @endforelse                         --}}

                    </tbody>
                </table>
            </div>
    </div>


@endsection