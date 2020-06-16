@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header') 
  
    <h1>Proprietarios</h1>
 
        <!--a href="{{ route('owner.create') }}">Novo Proprietario</a-->
    
    
    <table class="table table-bordered table-striped">
        <tr>
            <th>Nome</th>
             <th>Endereço</th>             
               <th>Telefone</th>
               <th>Imobiliaria</th>
               <th>Ação</th>
        </tr>
        @foreach($owners as $owner)
        <tr>
            <td><a href="{{ route('owner.show',$owner->id) }}"> {{ $owner->name }}</a></td>
             <td>{{ $owner->address }}</td>
             <td>{{ $owner->phone }}</td>
             <td>{{$owner->real_states->name}}</td>
             <td><a href="{{ route('owner.edit', $owner->id) }}"><button type="button" class="btn btn-sm btn-primary">Editar</td></button></a>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('owner.create') }}"><p><button>Cadastrar novo Proprietario</button></a></p>
    {!! $owners->render() !!}

  
  
  
@endsection
