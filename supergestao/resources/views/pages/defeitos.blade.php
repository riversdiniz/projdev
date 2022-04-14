@extends('adminlte::page')

@section('title', 'Defeitos')

@section('content_header')
    <h1>Página de Defeitos</h1>
@endsection

@section('content')
    
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Tabela de BOLETIM BNC</h3>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
                <thead>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                    </tr>

                </tbody>

                <tfoot>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                </tfoot>
        </table>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="">
@endsection

@section('js')

@endsection