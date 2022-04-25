<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;

class HomeController extends Controller
{

    public function index(){

    $defeitos = UsuVdefeito::all();

        // foreach($defeitos as $defeito)
        //     echo $defeito->codlot;

    // dd($defeitos);

    return view('pages.index');
    }

    // public function index()
    // {
    //     $defeitos = DB::select('select * from USU_VDEFEITOS');
 
    //     return view('pages.index', ['defeito' => $defeitos]);
    // }

    // public function index() {
    //     $list = UsuVdefeito::all();

    //     print_r($list);
    // }

    // public function index() {
    //     $list = UsuVdefeito::all();

    //     foreach($list as $item) {
    //         echo $item->codlot."<br/>";
    //     }

    // //   return View('pages.home');
    // }

    public function painel() {
        return View('pages.dashboard');
    }

    public function defeito() {
        return View('pages.defeitos');
    }

    public function pesquisar() {

        $search = request('search');

        if($search) {
            
            $list = UsuVdefeito::where([
                ['codlot', 'like', '%'.$search.'%']
            ])->get();

        } else {

            $list = UsuVdefeito::all();

        }


        return View('pages.pesqdef',['list' => $list, 'search' => $search]);
    }

    public function Consulta() {
        return View('pages.consulta');
    }
}
