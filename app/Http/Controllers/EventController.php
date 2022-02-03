<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
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
    
    }

    public function create(){
        return view('events.create');

    }
}
