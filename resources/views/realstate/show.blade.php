@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  
    <h1>Detalhes da Imobiliaria</h1>
    

    <p>Id: {{ $realstate->id }}</p>
    <p>Nome: {{ $realstate->name }}</p>
     <p>Endereço: {{ $realstate->address }}</p>
     <p>Telefone: {{ $realstate->phone }}</p>
     <p>Email: {{ $realstate->email }}</p>
     <p><a href="{{ route('realstate.index') }}">Voltar</a></p>
     
     
@endsection
