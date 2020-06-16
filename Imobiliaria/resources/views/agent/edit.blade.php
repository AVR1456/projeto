@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header') 
    <h1>Editar Corretor</h1>
    
    {!! Form::model($agent,['route' => ['agent.update', $agent->id], 'method' => 'put']) !!}
        @include('agent.form')
    {!! Form::close() !!}      
@endsection