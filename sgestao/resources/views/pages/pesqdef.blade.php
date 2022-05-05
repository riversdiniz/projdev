@extends('adminlte::page')

@section('title', 'Pesquisar')

@section('content_header')


<div class="row">
<div class="col-md-8 offset-md-2">
<form action="{{ route('pages.pesquisar')}}" method="post">
<div class="input-group">
<input type="pesquisar" class="form-control form-control-lg" placeholder="Type your keywords here">
<div class="input-group-append">
<button type="submit" class="btn btn-lg btn-default">
<i class="fa fa-search"></i>
</button>
</div>
</div>
</form>
</div>
</div>

{{-- <form action=" {{ route('pages.pesqdef')}}" method="post">
    <input type="text" name="pesquisar" placeholder="Filtrar:">
    <button type="submit">Filtrar</button>
</form> --}}
@endsection




