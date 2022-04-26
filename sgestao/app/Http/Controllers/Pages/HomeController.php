<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;

class HomeController extends Controller
{
    public function index(){
        
        // $defeitos = UsuVdefeito::all();
        // foreach($defeitos as $defeito)
        //     echo $defeito->codlot;
        // dd($defeitos);

        // $defeitos = DB::table('dbo.USU_VDEFEITOS')
        //     ->get();

        return view('pages.index');
    }

    public function painel() {
        return View('pages.dashboard');
    }

    public function defeito() {

        // $defeitos = DB::table('dbo.USU_VDEFEITOS')
        //     ->get();
        $defeitos = UsuVdefeito::all();

        return View('pages.defeitos',['defeitos'=>$defeitos]);
    }

    public function pesquisar() {

        $search = request('search');

        if($search) {

            $$pesquis = UsuVdefeito::where([
                ['codlot', 'like', '%'.$search.'%']
            ])->get();

        } else {

            $pesquis = UsuVdefeito::all();
        }

        return View('pages.pesqdef', ['pesquis' => $pesquis, 'search' => $search]);
    //    return View('pages.pesqdef', compact('pesquis'));
    }

    public function Consulta() {
        return View('pages.consulta');
    }
}
