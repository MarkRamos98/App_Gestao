<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    echo "Futura Tela de Login";
});

Route::get('/menu', function(){
    echo "Futura Tela de Menu";
});

Route::get('/produtos', function(){
    echo "Futura Tela de Produtos";
});

Route::get('/contato', function(){
    echo "Futura Tela de Contato";
});

Route::get('/sobre-nos', function(){
    echo "Futura Tela Sobre Nós";
});

Route::get('/Fornecedores', function(){
    echo "Futura Tela de Fornecedores";
});

Route::get('/Principal', function(){
    echo "Futura Tela principal";
});
