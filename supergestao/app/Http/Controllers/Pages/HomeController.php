<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;

class HomeController extends Controller
{

    //     public function index()
    // {
    //     $defeitos = DB::select('select * from USU_VDEFEITOS');
 
    //     return view('pages.index', ['defeito' => $defeitos]);
    // }

    // public function __invoke() {
    //     $list = Vdefeito::all();

    //     print_r($list);
    // }

    public function index() {
        $list = UsuVdefeito::all();

        foreach($list as $item) {
            echo $item->codlot."<br/>";
        }

        // print_r($list);
        // return View('pages.home');
    }

    public function defeito() {
        return View('pages.defeitos');
    }

    public function Consulta() {
        return View('pages.consulta');
    }
}
