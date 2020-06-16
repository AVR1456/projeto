@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')


  
    <h1>Imobiliaria</h1>
 
        
    
    
    <table class="table table-bordered table-striped">
        <tr>
            <th>Nome</th>
             <th>Endereço</th>
               <th>Email</th>
               <th>Ação</th>
               
        </tr>
        @foreach($realstates as $realstate)
        <tr>
            <td><a href="{{ route('realstate.show',$realstate->id) }}"> {{ $realstate->name }}</a></td>
             <td>{{ $realstate->address }}</td>
             <td>{{ $realstate->email }}</td>
             <td><a href="{{ route('realstate.edit', $realstate->id) }}"><button type="button" class="btn btn-sm btn-primary">Editar</td></button></a>
        </tr>
        @endforeach
    </table>
  
    
    <a href="{{ route('realstate.create') }}"><button>Cadastrar nova Imobiliaria</button></a>
    
    {!! $realstates->render() !!}
    
@endsection


