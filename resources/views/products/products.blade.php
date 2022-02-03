@extends('layouts.main')

@section('title', "HDC Events");

@section('content')

    <h1>Produtos</h1>


    @if($busca != '')
        <p>O usuario está buscando por: {{ $busca }}</p>
    @endif

    <button>
        <a href="/">Home</a>
    </button>  
    <button>
        <a href="/contact">Contato</a>
    </button>  
@endsection