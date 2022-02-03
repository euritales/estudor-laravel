@extends('layouts.main')

@section('title','Produto')

@section('content')
    
    @if($id != null)
        <p>Exibindo Produto por ID: {{ $id }}</p>
    @endif
    
@endsection