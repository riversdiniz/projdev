<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;

class HomeController extends Controller
{

    public function index(){
        
        $defeitos = UsuVdefeito::all();
        foreach($defeitos as $defeito)
            echo $defeito->codlot;
        // dd($defeitos);

         return view('pages.index');
    }

    public function painel() {
        return View('pages.dashboard');
    }

    public function defeito() {
        return View('pages.defeitos');
    }

    public function pesquisar() {

       return View('pages.pesqdef');
    }

    public function Consulta() {
        return View('pages.consulta');
    }
}
