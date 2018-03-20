<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('pessoas', 'PessoaController');
Route::resource('colaborador', 'ColaboradorController');
Route::resource('empresas', 'EmpresaController');
Route::resource('servicos', 'ServicoController');
Route::resource('clientes', 'ClienteController');
