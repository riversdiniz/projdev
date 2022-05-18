<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuVdefeito;

class StatusController extends Controller
{
    public function statustime() {
        return View('pages.status');
    }
}
