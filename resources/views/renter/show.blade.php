@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')  
  
    <h1>Detalhes do Locatário</h1>
    

    <p>Id: {{ $renter->id }}</p>
    <p>Nome: {{ $renter->name }}</p>
    <p>CPF: {{$renter->cpf}}</p>
    <p>Nascimento: {{$renter->birth_date}}</p>
     <p>Endereço: {{ $renter->address }}</p>
     <p>Telefone: {{ $renter->phone }}</p>
     <p><a href="{{ route('renter.index') }}">Voltar</a></p>

     
     
@endsection