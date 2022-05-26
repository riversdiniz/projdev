<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;

class ConsultaController extends Controller
{
    public function consulta() {
        $search = request('search');

        if($search) {

            $defeitos = UsuVdefeito::where([
                ['codlot', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $defeitos = UsuVdefeito::all();
        }
        
        return View('pages.consulta');
    }
}
