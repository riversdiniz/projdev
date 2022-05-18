<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;


class HomeController extends Controller
{
    public function index(){
        
        // $defeitos = UsuVdefeito::all();

        // dd($defeitos);
        
        return View('pages.dashboard');
    }

    public function painel() {

        return View('pages.dashboard');

    }

}
