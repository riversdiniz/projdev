@extends('adminlte::page')

@section('title', 'index Teste')

@section('content_header')
    <div class="col-lg-2">
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><input type="radio"></span>
    </div>
    <input type="text" class="form-control">
    </div>

    </div>

<div class="col-lg-2">
    <div class="form-group  text-center">
        <label for="exampleSelectRounded0">Responsável</label>
        <select class="custom-select rounded-0" id="exampleSelectRounded0">
            <option>Value 1</option>
            <option>Value 2</option>
            <option>Value 3</option>
        </select>
    </div>
</div>


<div class="container">
            <br>
            <div class="col-sm-12 rounded b text-center">
                <div class="col-4 col-lg-2">
                    <div class="form-group">
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label text-center">Revisar 100%</label>
                        </div>
                    </div>
                </div>

                <div class="col-4 col-lg-2">
                    <div class="form-group">
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label text-center">Retrabalhar</label>
                        </div>
                    </div>
                </div>

                <div class="col-4 col-lg-2">
                    <div class="form-group">
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label text-center">Autorizar</label>
                        </div>
                    </div>
                </div>

                <div class="col-4 col-lg-2">
                    <div class="form-group">
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label text-center">Scrapear</label>
                        </div>
                    </div>
                </div>

                <div class="col-4 col-lg-2">
                        <div class="form-group">
                            <div class="form-check">
                                <br>
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label text-center">Especificar</label>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-4 col-lg-2 text-center">6</div> --}}
                
            </div>
        </div>



<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><input type="radio"></span>
</div>
<input type="text" class="form-control">
</div>

@endsection




