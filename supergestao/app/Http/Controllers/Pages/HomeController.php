<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vdefeito;

class HomeController extends Controller
{

    public function __invoke() {
        $list = Vdefeito::all();

        print_r($list);
    }

    // public function index() {
    //     return View('pages.home');
    // }

    // public function defeito() {
    //     return View('pages.defeitos');
    // }

    // public function Consulta() {
    //     return View('pages.consulta');
    // }
}
