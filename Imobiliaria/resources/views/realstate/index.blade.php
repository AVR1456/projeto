@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')


  
    <h1>Imobiliaria</h1>
 
        
    
    
    <table class="table table-bordered table-striped">
        <tr>
            <th>Nome</th>
             <th>Endereço</th>
               <th>Email</th>
               <th></th>
               <th></th>
               
        </tr>
        @foreach($realstates as $realstate)
        <tr>
            <td><a href="{{ route('realstate.show',$realstate->id) }}"> {{ $realstate->name }}</a></td>
             <td>{{ $realstate->address }}</td>
             <td>{{ $realstate->email }}</td>
             <td><a href="{{ route('realstate.edit', $realstate->id) }}"><button type="button" class="btn btn-sm btn-primary">Editar</td></button></a>
             <td> <form action="{{ route('realstate.destroy', $realstate->id) }}" method="POST" onclick="return confirm('Tem certeza que deseja deletar?')">

            {!! csrf_field() !!}
                    {{ method_field('DELETE') }}
          
                        <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
            
            </form>
         </td>
        </tr>
        @endforeach
    </table>
  
    
    <a href="{{ route('realstate.create') }}"><button>Cadastrar nova Imobiliaria</button></a>
    
    {!! $realstates->render() !!}
    
@endsection


