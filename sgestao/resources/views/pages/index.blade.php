@extends('adminlte::page')

@section('title', 'Defeitos Teste')

@section('content_header')

<h1>DEFEITOS TESTE</h1>

@endsection

@section('content')
    <table class="table table-hover">
        <tr>
            <th>Codigo 3</th>
            <th>Codigo 4</th>
            <th>Codigo 5</th>
            <th>Codigo 6</th>
            <th>Codigo 7</th>
            <th>Codigo 8</th>
            <th>Codigo 9</th>
            <th>Codigo 10</th>
            <th>Codigo 11</th>
            <th>Codigo 12</th>
            <th>Codigo 13</th>
            <th>Codigo 14</th>
            <th>Codigo 15</th>
            <th>Codigo 16</th>
        </tr>
        @foreach ($defeitos as $defeito)
        <tr>
            <td>{{$defeito->numorp}}</td>
            <td>{{$defeito->codpro}}</td>
            <td>{{$defeito->despro}}</td>
            <td>{{$defeito->codlot}}</td>
            <td>{{$defeito->qtdprv}}</td>
            <td>{{$defeito->qtdre1}}</td>
            <td>{{$defeito->totrfg}}</td>
            <td>{{$defeito->codetg}}</td>
            <td>{{$defeito->desetg}}</td>
            <td>{{$defeito->coddft}}</td>
            <td>{{$defeito->desdft}}</td>
            <td>{{$defeito->codaco}}</td>
            <td>{{$defeito->desaco}}</td>
            <td>{{$defeito->qtdrfg}}</td>
        </tr>
        @endforeach
        
    </table>
@endsection