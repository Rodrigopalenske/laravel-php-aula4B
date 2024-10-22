@extends('app')
@section('title', 'Novo Estudante')
@section('content')
    <h1>Novo Estudante</h1>
    <form action="{{ route('estudantes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome">
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="number" name="cpf" id="cpf" class="form-control" placeholder="Digite o cpf">
        </div>

        <div class="mb-3">
            <label for="nascimento" class="form-label">Nascimento</label>
            <input type="date" class="form-control" name="nascimento" id="nascimento"></input>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>

    </form>    
@endsection