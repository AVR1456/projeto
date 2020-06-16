@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')  
    <h1>Editar Propriedade</h1>
    {!! Form::model($property,['route' => ['property.update', $property->id], 'method' => 'put']) !!}
        @include('property.form')
    {!! Form::close() !!}      
@endsection