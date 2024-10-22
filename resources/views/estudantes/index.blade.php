@extends('app')
@section('tittle', 'Lista de Estudantes')
@section('content')
    
        <h1>Lista de Estudantes</h1>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>ID-Sala</td>
                    <td>Nome</td>
                    <td>cpf</td>
                    <td>nascimento</td>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($estudantes as $estudante)
                    <tr>
                        <td>{{ $estudante->id }}</td>
                        <td>teste</td>
                        <td>
                            <a href="{{ route('estudantes.show', $estudante) }}">
                                {{ $estudante->nome }}
                            </a>
                        </td>
                        <td>{{ $estudante->cpf }}</td>
                        <td>{{ $estudante->nascimento }}</td>
                        <td>
                            <a href="{{route('estudantes.edit', $estudante['id'])}}">Editar</a>
                        </td>
                        <td>
                            <a href="{{route('estudantes.destroy', $estudante['id'])}}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('estudantes.create') }}" class="btn btn-success">Novo estudante</a>
        
@endsection