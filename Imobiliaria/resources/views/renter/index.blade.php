@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header') 
    <h1>Locatários</h1>
 
        <!--a href="{{ route('renter.create') }}">Novo Locatário</a-->
    
    
    <table class="table table-bordered table-striped">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Nascimento</th>
             <th>Telefone</th>             
               <th>Email</th>
               <th>Corretor</th>
               <th>Ação</th>
        </tr>
        @foreach($renters as $renter)
        <tr>
            <td><a href="{{ route('renter.show',$renter->id) }}"> {{ $renter->name }}</a></td>
            <td>{{$renter->cpf}}</td> 
            <td>{{ date('d/m/Y', strtotime($renter->birth_date))}}</td>
            <td>{{ $renter->phone }}</td>
             <td>{{ $renter->email }}</td>
             <td>{{$renter->real_state_agents->name}}</td>
             <td><a href="{{ route('renter.edit', $renter->id) }}"><button type="button" class="btn btn-sm btn-primary">Editar</td></button></a>
        </tr>
        @endforeach
    </table>

    <a href="{{ route('renter.create') }}"><p><button>Cadastrar novo Corretor</button></a></p>
  
    {!! $renters->render() !!}

   
  
@endsection
