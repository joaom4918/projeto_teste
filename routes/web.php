<?php

use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->name("site.home");

Route::get('/admin/fornecedores/cotacoes',[FornecedorController::class,'consultarCotacoes'])->name("admin.fornecedores.cotacoes");

/*Route::get('/', function () {
    return view('welcome');
});

*/
