@extends('layouts.app')
@section('title', 'Listando todos os registros')
 
@section('content')

<h1>Listagem de Produtos</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped table-sm">
        <thead>
      <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Sku</th>
          <th>Status</th>
          <th>Quantidade</th>
          <th>Descrição</th>
          <th>
        <a href="{{ route('produtos.create') }}" class="btn btn-info btn-sm" >Novo</a>
          </th>
      </tr>
        </thead>
        <tbody>
      @forelse($produtos as $produto)
      <tr>
          <td>{{ $produto->produtos_id }}</td>
          <td>{{ $produto->nome }}</td>
          <td>{{ $produto->sku }}</td>
          @if ( $produto->states_id  == 1)
          <td>{{ 'Ativo'}}</td>
          @else
          <td>{{ 'Baixado'}}</td>
          @endif

          
          <td>{{ $produto->quantidade }}</td>
          <td>{{ $produto->descricao }}</td>
          <td>
          <a href="{{ route('produtos.edit',$produto->produtos_id)}}" class="btn btn-warning btn-sm">Editar</a>
          <a href="{{ route('baixar',$produto->produtos_id)}}" class="btn btn-warning btn-sm">Baixa</a>

            <form method="POST" action="{{ route('produtos.destroy',$produto->produtos_id) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
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
