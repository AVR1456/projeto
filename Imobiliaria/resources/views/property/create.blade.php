@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  
  <h1>Nova Propriedade</h1>

   <form action="{{ route('property.store') }}" method="post">
        {!! csrf_field() !!} 
     @include('property.form')
   
@endsection
