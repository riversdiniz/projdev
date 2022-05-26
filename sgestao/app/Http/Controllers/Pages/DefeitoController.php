<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;
use App\Models\UsuTbnc;

class DefeitoController extends Controller
{
    public function defeito() {
        $search = request('search');

        if($search) {

            $defeitos = UsuVdefeito::where([
                ['codlot', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $defeitos = UsuVdefeito::all();
        }
        
        return View('pages.defeitos', ['defeitos' => $defeitos, 'search' => $search]);
    }

    public function store(Request $request) {
        
        $usutbnc = new UsuTbnc();
        $usutbnc->usu_gerencia = $request->usu_gerencia;
        $usutbnc->usu_visto = $request->usu_visto;
        $usutbnc->usu_resp = $request->usu_resp;
        $usutbnc->usu_descricao = $request->usu_descricao;
        $usutbnc->usu_sgi = $request->usu_sgi;
        $usutbnc->usu_diretoria = $request->usu_diretoria;

        $usutbnc->save();
        
        return redirect('/pages/defeitos')->with('msg', 'Criado com sucesso!'); 
    }

    // public function show() {

    //     $usutbnc = UsuTbnc::findOrFail();

    //     return View('pages.show', ['usutbnc' => $usutbnc]);
    // }

}
