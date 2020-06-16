@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header') 
  
<h1>Novo Locatário</h1>
    
{!! Form::open(['route' => 'renter.store']) !!}
@include('renter.form')
{!! Form::close() !!}  

@endsection