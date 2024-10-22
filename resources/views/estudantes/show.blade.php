@extends('app')
@section('tittle', 'Detalhes do Estudante')
@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes do estudante {{$estudante->nome}}
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{$estudante->id}}</p>
                <p><strong>Nome:</strong> {{$estudante->nome}}</p>
                <p><strong>CPF:</strong> {{$estudante->cpf}}</p>
                <p><strong>Nascimento:</strong> {{$estudante->nascimento}}</p>
                <br>
                <a class="btn btn-success" href="{{ route('estudantes.index') }}">Voltar</a>
            </div>
        </div>
@endsection
