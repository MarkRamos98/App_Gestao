<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function(){
    echo "Futura Tela de Login";
});

Route::get('/menu', function(){
    echo "Futura Tela de Menu";
});

Route::get('/produtos', function(){
    echo "Futura Tela de Produtos";
});

Route::get('/contato', [\App\http\Controllers\ContatoController::class,'contato']);

Route::get('/sobre-nos', [\App\http\Controllers\SobrenosController::class,'sobrenos']);

Route::get('/Fornecedores', function(){
    echo "Futura Tela de Fornecedores";
});

Route::get('/', [\App\http\Controllers\PrincipalController::class,'principal']);
