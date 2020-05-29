@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h4 >Adicionar Produto</h4>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('produtos.store') }}">
          @csrf
          <input type="hidden" value="{{ $produto['produtos_id'] }}" class="form-control" name="produto_id"/>

          <div class="form-group">    
              <label for="nome">Nome:</label>
              <input type="text" value="{{ $produto['nome'] }}" class="form-control" name="nome"/>
          </div>

          <div class="form-group">
              <label for="quantidade">Quantidade:</label>
              <input type="text" value="{{ $produto['quantidade'] }}" class="form-control" name="quantidade"/>
          </div>

          <div class="form-group">
              <label for="descricao">Descrição:</label>
              <input type="text" value="{{ $produto['descricao'] }}" class="form-control" name="descricao"/>
          </div>
                        
          <button type="submit" class="btn btn-primary-outline">Add Produto</button>
      </form>
  </div>
</div>
</div>
@endsection