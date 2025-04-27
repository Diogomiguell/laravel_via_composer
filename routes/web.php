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
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobreNos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/login', function() { return 'login'; })->name('site.login');

#Utilizando prefixo
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function() { return 'fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function() { return 'produtos'; })->name('app.produtos');
});

#Parâmetos em rotas

//nome, categoria, assunto, mensagem
/* Route::get(
    '/contato/{nome}/{categoria}/{assunto}/{mensagem}', 
    function(string $nome, string $cat, string $ass, string $msg) {
        echo "Nome: $nome - Categoria: $cat - Assunto: $ass - Mensagem: $msg.";
    }
);

#Parâmetros opcionais
Route::get(
    '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}', 
    function(
        string $nome = 'Desconhecido',
        string $cat = 'Informação', 
        string $ass = 'Contato', 
        string $msg = 'Não informada'
    ) {
        echo "Nome: $nome - Categoria: $cat - Assunto: $ass - Mensagem: $msg.";
    }
);

#Parâmetros com expressões regulares
Route::get(
    '/contato/{nome}/{categoria_id}', 
    function(
        string $nome = 'Desconhecido',
        int $categoria_id = 1 // 1 - 'Informação'
    ) {
        echo "Nome: $nome - $categoria_id";
    }
)->where('categoria_id', '[0-9]+')
->where('nome', '[A-Za-z]+'); */