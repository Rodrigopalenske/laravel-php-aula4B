@extends('app')
@section('tittle', 'Editar Cliente')
@section('content')
    <h1>Novo Cliente</h1>
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT') {{-- Transforma em um methodo put --}}
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome" value="{{$client['nome']}}">
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Digite o endereço" value="{{$client['endereco']}}">
        </div>

        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" name="observacao" id="observacao" rows="3">{{$client['observacao']}}</textarea>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>
        <a href="{{ route('clients.index') }}"></a>
    </form>    
@endsection