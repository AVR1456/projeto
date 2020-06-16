@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  
    <h1>Detalhes do Corretor</h1>
    

    <p>Id: {{ $agent->id }}</p>
    <p>Nome: {{ $agent->name }}</p>
     <p>Email: {{ $agent->email }}</p>
     <p>Telefone: {{ $agent->phone }}</p>
     <p><a href="{{ route('agent.index') }}">Voltar</a></p>

     
     
@endsection