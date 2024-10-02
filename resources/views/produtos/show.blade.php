@extends('app')
@section('tittle', 'Detlhe do Cliente')
@section('content')
  <div class="card">
    <div class="card-header">
      Detalhes do produto {{$produto->nome}}
    </div>
    <div class="card-body">
      <p><strong>ID:</strong> {{$produto->id}}</p>
      <p><strong>Nome:</strong> {{$produto->nome}}</p>
      <p><strong>Descrição:</strong> {{$produto->descricao}}</p>
      <p><strong>Valor:</strong> {{$produto->valor}}</p>
      <p><strong>Estoque:</strong> {{$produto->estoque}}</p>
      <br>
      <a class="btn btn-success" href="{{ route('produtos.index') }}">Voltar</a>
    </div>
  </div>
@endsection