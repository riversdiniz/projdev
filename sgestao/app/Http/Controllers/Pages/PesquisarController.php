<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;

class PesquisarController extends Controller
{
    public function pesquisar(Request $request) { 
        $pesq = UsuVdefeito::when(isset($request->search), function ($p) use ($request) {
        $p->where('codlot', 'like', '%'.$request->search.'%');
        })->paginate();
        
        return View('pages.pesqdef', [
            'pesq' => $pesq 
        ]   
    );
 
    }
}
