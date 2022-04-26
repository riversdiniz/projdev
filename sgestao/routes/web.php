<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('/', [\App\Http\Controllers\Pages\HomeController::class, 'index']);
Route::get('/pages/dashboard', [\App\Http\Controllers\Pages\HomeController::class, 'painel']);
Route::get('/pages/defeitos', [\App\Http\Controllers\Pages\HomeController::class, 'defeito']);
Route::get('/pages/pesqdef', [\App\Http\Controllers\Pages\HomeController::class, 'pesquisar']);
Route::get('/pages/consulta', [\App\Http\Controllers\Pages\HomeController::class, 'consulta']);
