@extends('adminlte::page')

@section('plugins.Chartjs', true)

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>0</h3>
                    <p>Visitantes</p>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-eye"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>0</h3>
                    <p>Usuários Online</p>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-heart"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>0</h3>
                    <p>Páginas</p>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-sticky-note"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>0</h3>
                    <p>Usuários</p>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-user"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Páginas mais visitadas</h3>
                </div>
                <div class="card-body">
                    <canvas id="pagePie"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Contato Suporte</h3>
                </div>
                <div class="card-body">
                    <h6>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        SuperGestão © 2022 - Impressora Amazonense Ltda - IMPRAM.
                        Todos os direitos reservados.
                        Versão 1.0.
                    </h6>
                </div>
            </div>
        </div>
    </div>

<script>
    windows.onload = function() {
        let ctx = document.getElementById('pagePie').getContext('2d');
        windows.pagePie = new Chart(ctx, {
            type:'pie',
            date:{
                datasets:[{
                    data:[2, 3, 1],
                    backgroundColor: '#000FF'
                }],
                labels:['P1', 'P2', 'P3']
            },
            options:{
                reponsive:true,
                legend:{
                    display:false
                }
            }
        });
    }
</script>
@endsection


@section('footer')
    <div class="col-sm-12 text-center">
        <strong>Copyright © 2022 <a href="#">Impressora Amazonense Ltda</a>.</strong> Todos os direitos reservados.
    </div>
@endsection