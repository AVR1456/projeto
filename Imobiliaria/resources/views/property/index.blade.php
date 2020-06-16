@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  
    <h1>Propriedade</h1>
    <p>
       
    </p>
    
    <table class="table table-bordered table-striped"">
        <tr>
            <th>Descrição</th>
            <th>Enderço</th>
            <th>Número</th>
            <th>Proprietario</th>
            <th>Aluguel</th>
            <th>Acão</th>
        </tr>
        @foreach($properties as $property)
        <tr>
            <td><a href="{{ route('property.show',$property->id) }}" > {{ $property->description }}</a></td>
            <td>{{$property->address}}</td>
            <td>{{$property->number }}</td>
            <td>{{$property->owners->name}}</td>
            <td>{{$property->rents->lease_value}}</td>
            <td><a href="{{ route('property.edit', $property->id) }}"><button type="button" class="btn btn-sm btn-primary">Editar</td></button></a>
        </tr>
        @endforeach
    </table>

     <a href="{{ route('property.create') }}"><p><button>Nova Propriedade</button></p></a>
    {!!$properties->render()!!}

@endsection
