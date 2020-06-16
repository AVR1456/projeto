@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header') 

<h1> Editar Registro imobiliaria</h1>

{!! Form::model($realstate,['route' => ['realstate.update', $realstate->id], 'method' => 'put']) !!}
@include('realstate.form')
{!! Form::close() !!}

@endsection

