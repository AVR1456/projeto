@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header') 
  
<h1>Novo Corretor</h1>
    
{!! Form::open(['route' => 'agent.store']) !!}
@include('agent.form')
{!! Form::close() !!} 
@endsection