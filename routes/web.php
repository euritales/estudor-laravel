<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Matheus";
    $idade = 29;
    $programador = 'front';
    
    $arr = [1,2,3,4,5];
    $nomes = ["André", "Maria", "João", "Tulio", "Paty"];

    return view('welcome',
    [
        'nome' => $nome,
        'idade' =>$idade,
        'profissao' => $programador,
        'arr' => $arr,
        'nomes' => $nomes
    ]);

});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/produtos', function () {
    return view('products');
});
