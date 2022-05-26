<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuTbnc;

class FormController extends Controller
{
    public function formulario(Request $request) {
        
        $usutbnc = new UsuTbnc();
        $usutbnc->usu_nome = $request->usu_nome;

        $usutbnc->save();
        
        return View('pages.formularios'); 
    }
}
