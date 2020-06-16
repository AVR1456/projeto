@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header') 
  
    <h1>Detalhes do Proprietario</h1>
    

    <p>Id: {{ $owner->id }}</p>
    <p>Nome: {{ $owner->name }}</p>
    <p>CPF: {{$owner->cpf}}</p>
     <p>Endereço: {{ $owner->address }}</p>
     <p>Telefone: {{ $owner->phone }}</p>
     <p><a href="{{ route('owner.index') }}">Voltar</a></p>

     
     
@endsection