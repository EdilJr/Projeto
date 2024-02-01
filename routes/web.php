<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use App\Models\Usuario;

Route::get('/', function () {
    return view('usuarios');
});
Route::post('/cadastro', function (HttpRequest $informaçoes) {
    Usuario::created([
        'nome' => $informaçoes->nome
    ]);
    echo "Usuario Criado com Sucesso!!!";
});