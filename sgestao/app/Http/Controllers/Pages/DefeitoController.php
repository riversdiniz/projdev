<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;

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
}
