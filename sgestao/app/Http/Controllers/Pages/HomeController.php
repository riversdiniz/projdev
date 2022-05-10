<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;


class HomeController extends Controller
{
    public function index(){
        
        $defeitos = UsuVdefeito::all();

        dd($defeitos);
        
        return View('pages.index', [
            'defeitos' => $defeitos
        ]);
    }

    public function painel() {
        return View('pages.dashboard');
    }

    public function defeito() { 
        
        $defeitos = UsuVdefeito::where("codlot", $defeitos)->first();
        
        return View('pages.defeitos', [
            'defeitos' => $defeitos
        ]); 
    }

    public function pesquisar(Request $request) { 
        $pesq = UsuVdefeito::when(isset($request->search), function ($p) use ($request) {
        $p->where('codlot', 'like', '%'.$request->search.'%');
        })->paginate();
        
        return View('pages.pesqdef', [
            'pesq' => $pesq 
        ]   
    );
        // return View('pages.pesqdef', [
        //     'search' => $request->search 
        // ]);   
    }

    public function Consulta() {
        
        return View('pages.consulta'); 
    }

}
