@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')   
    <h1>Editar Locatário</h1>
    {!! Form::model($renter,['route' => ['renter.update', $renter->id], 'method' => 'put']) !!}
        @include('renter.form')
    {!! Form::close() !!}      
@endsection