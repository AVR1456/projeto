@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header') 
    
    <h1>Editar Proprietario</h1>
    {!! Form::model($owner,['route' => ['owner.update', $owner->id], 'method' => 'put']) !!}
        @include('owner.form')
    {!! Form::close() !!}      
@endsection