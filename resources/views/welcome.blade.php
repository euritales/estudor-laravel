<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/styles/home.css">
        <script src="/js/script.js"></script>
        <title>Laravel</title>

    </head>
    <body >

        <h1>Menu Principal</h1>
        <img src="/img/cpbr.jpg"  alt="Campus Party">

        @if(10 < 5)
            <p>Verdadeiro</p>
        @else
            <p>Falso</p>
        @endif
        <p>
            {{ $nome == "Pedro" }}
        </p>
   
        @if($nome == "Pedro")
            <p>O nome é pedro</p>
        @elseif($nome == "Matheus" && $idade > 18)
            <p>O nome é {{ $nome }}. Maior de Idade: {{ $idade }}</p>
        @else
            <p>O nome não é pedro</p>
        @endif
        
        @for($i = 0; $i < count($arr); $i++)
            <br>
            <span>Nome: {{ $nomes[$i] }}</span>
            <br/>
            <span>{{ $arr[$i] }} - Indice: {{ $i }} </span>
            @if($i == 3)
                <span>Não! Numero {{ $arr[$i] }} Não!</span>
            @endif    
        @endfor
            <br>
            <br>
            <br>
            @foreach($nomes as $nome)
                <span>Para saber o index do looping{{ $nome }} ({{ $loop -> index }}) ; </span>
            @endforeach

            <br>

        @php
            $name = 'Joao';
            echo $name;
        @endphp
        
        <!-- Agora voce vê -->
        {{-- Agora nao vê mais --}}

    </body>
</html>
