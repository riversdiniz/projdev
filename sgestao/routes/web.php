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
Route::get('/pages/status', [\App\Http\Controllers\Pages\HomeController::class, 'statustime']);
Route::any('/pages/defeitos', [\App\Http\Controllers\Pages\HomeController::class, 'defeito'])->name('pages.defeitos');
Route::any('/pages/pesqdef', [\App\Http\Controllers\Pages\HomeController::class, 'pesquisar'])->name('pages.pesqdef');
Route::get('/pages/consulta', [\App\Http\Controllers\Pages\HomeController::class, 'consulta']);


// Route::prefix('/tarefas')->group(function(){
//     Route::get('/', '');

//     Route::get('add', ''); // Tela de adição
//     Route::get('add', ''); // Ação de adição

//     Route::get('edit/{$id}', ''); // Tela de edição
//     Route::get('edit/{$id}', ''); // Ação de edição

//     Route::get('delete/{$id}', ''); // Tela de edição

//     Route::get('marcar/{$id}', ''); // Marcar resolvido/não.
// });





// Auth::routes();

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');
