<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;

class ConsultaController extends Controller
{
    public function Consulta() {
        
        return View('pages.consulta'); 
    }
}
