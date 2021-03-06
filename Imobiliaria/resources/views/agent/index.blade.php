@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  
    <h1>Corretores</h1>
 
        <!--a href="{{ route('agent.create') }}">Novo Corretor</a-->
    
    
    <table class="table table-bordered table-striped" >
        <tr>
            <th>Nome</th>
             <th>Telefone</th>             
               <th>Email</th>
               <th>Imobiliaria</th>
               <th></th>
               <th></th>
        </tr>
        @foreach($agents as $agent)
        <tr>
            <td><a href="{{ route('agent.show',$agent->id) }}"> {{ $agent->name }}</a></td>
             <td>{{ $agent->phone }}</td>
             <td>{{ $agent->email }}</td>
             <td>{{$agent->real_states->name}}</td>
             <td><a href="{{ route('agent.edit', $agent->id) }}"><button type="button" class="btn btn-sm btn-primary">Editar</button></td></a>
             
             <td> <form action="{{ route('agent.destroy', $agent->id) }}" method="POST" onclick="return confirm('Tem certeza que deseja deletar?')">

                {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
              
                            <button type="submit" class="btn btn-danger">Excluir</button>
           
                        </form>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('agent.create') }}"><p><button>Cadastrar novo Corretor</button></a></p>
    {!! $agents->render() !!}
    @can('IsAdmin')
    
  @endcan
  
@endsection
