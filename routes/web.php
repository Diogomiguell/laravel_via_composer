<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;

/* Route::get('/', function () {
    return view('welcome');
}); */

#Exemplo de rota usando a URI /teste e uma função anônima para fazer o callback

/* Route::get('/teste', function () {
    return "Hello World";
}); */

#Criando rotas para os controllers
Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/sobreNos', [SobreNosController::class, 'sobreNos']);
