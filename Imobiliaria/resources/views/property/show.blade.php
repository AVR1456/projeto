@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  
    <h1>Detalhes da Propriedade</h1>
    <p>Id: {{ $property->id }}</p>
    <p>Descriçao: {{ $property->description }}</p>
     <p>Número: {{ $property->number }}</p>
     <p>Proprietário:{{$property->owners->name}}</p>
     <p><a href="{{ route('property.index')}}">Voltar</a></p>
    
@endsection
