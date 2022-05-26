<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;

class StatusController extends Controller
{
    public function statustime(Request $request) { 
        $status = UsuVdefeito::when(isset($request->search), function ($s) use ($request) {
        $s->where('codlot', 'like', '%'.$request->search.'%');
        })->paginate();
        
        return View('pages.status', [
            'status' => $status 
        ]   
    );
 
    }

    // public function statustime() {
    //     return View('pages.status');
    // }
}
