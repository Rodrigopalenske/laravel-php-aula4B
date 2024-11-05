@extends('app')
@section('title', 'Editar Estudante')
@section('content')
    <h1>Editar Estudante</h1>
    <form action="{{ route('estudantes.update', $estudante['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{$estudante['nome']}}" placeholder="Digite seu nome">
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="number" name="cpf" id="cpf" class="form-control" value="{{$estudante['cpf']}}" placeholder="Digite seu CPF">
        </div>

        <div class="mb-3">
            <label for="nascimento" class="form-label">Nascimento</label>
            <input type="date" class="form-control" name="nascimento" id="nascimento" value="{{$estudante['nascimento']}}"></input>
        </div>

        <button class="btn btn-success" type="submit">Salvar</button>

    </form>    
@endsection