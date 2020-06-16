@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header') 
  
<h1>Novo Proprietario</h1>
    
{!! Form::open(['route' => 'owner.store']) !!}
@include('owner.form')
{!! Form::close() !!}      
@endsection  

