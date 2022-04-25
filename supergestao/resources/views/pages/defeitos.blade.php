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
                            <th>Código Produto</th>
                            {{-- <th>Descrição do Produto</th>
                            <th>Códido OP</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th> --}}

                        </tr>
                    </thead>

                    <tbody>

                        {{-- @foreach ($defeitos as $defeito) --}}
                           
                                
                        <tr>
                            {{-- <td>{{$defeito->codlot}}</td> --}}
                        </tr>

                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
    </div>


@endsection