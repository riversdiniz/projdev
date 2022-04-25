@extends('adminlte::page')

@section('title', 'Defeitos')

@section('content_header')
<br>
@endsection

@section('content')
    
    <div class="card">
            <div class="card-header">
                <h3 class="card-title">PESQUISAR OP</h3>
            </div>

            <div class="card-body">
                    <div class="container-fluid">
                        <h2 class="text-center display-4"></h2>
                <div class="row">

                <div class="col-md-8 offset-md-2">
                        <form action="defeitos" method="GET">
                            <div class="input-group">
                                <input type="search" class="form-control form-control-lg">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
    </div>


@endsection