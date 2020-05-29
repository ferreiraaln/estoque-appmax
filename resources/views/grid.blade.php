@extends('layout.app')
@section('title', 'Listando todos os registros')
 
@section('content')
<h1>Listagem de Clientes</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped table-sm">
        <thead>
      <tr>
          <th>#</th>
          <!-- <th>Nome</th>
          <th>Sobrenome</th>
          <th>email</th>
          <th>telefone</th> -->
          <th>
        <a href="{{ route('produtos.create') }}" class="btn btn-info btn-sm" >Novo</a>
          </th>
      </tr>
        </thead>
        <tbody>
      @forelse($produtos as $produtos)
      <tr>
          <td>{{ $produtos->produtos_id }}</td>
          <!-- <td>{{ $produtos->first_name }}</td>
          <td>{{ $produtos->last_name }}</td>
          <td>{{ $produtos->email }}</td>
          <td>{{ $produtos->phone }}</td> -->
          <td>
        <a href="{{ route('produtos.edit', ['id' => $produtos->id]) }}" class="btn btn-warning btn-sm">Editar</a>
        <form method="POST" action="{{ route('customers.destroy', ['id' => $produtos->id]) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
            @csrf
            <input type="hidden" name="_method" value="delete" >
            <button class="btn btn-danger btn-sm">Excluir</button>
        </form>
          </td>
      </tr>
      @empty
      <tr>
          <td colspan="6">Nenhum registro encontrado para listar</td>
      </tr>
      @endforelse
        </tbody>
    </table>
</div>
@endsection