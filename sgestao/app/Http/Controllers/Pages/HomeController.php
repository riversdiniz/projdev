<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;

class HomeController extends Controller
{
    public function index(){
        
        $defeitos = UsuVdefeito::paginate(1);
        
        return View('pages.index', [
            'defeitos' => $defeitos
        ]);
    }

    public function painel() {
        return View('pages.dashboard');
    }

    // public function defeito() {

    //     $defeitos = UsuVdefeito::all();

    //     return View('pages.defeitos',['defeitos'=>$defeitos]);
    // }

    public function defeito() {

        $defeitos = UsuVdefeito::paginate(1);
        
        return View('pages.defeitos', [
            'defeitos' => $defeitos
        ]);
        
    }

    public function pesquisar(Request $request) {

            UsuVdefeito::where("codlot", $impRecebido)->first();
            return View('pages.pesqdef', compact('defeitos'));
    }

    public function Consulta() {
        return View('pages.consulta');
    }

    public function ver() {

        $defeitos = UsuVdefeito::paginate(1);
        
        return View('pages.show', [
            'defeitos' => $defeitos
        ]);
        
    }
}
