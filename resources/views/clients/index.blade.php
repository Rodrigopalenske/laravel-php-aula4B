@extends('app')
@section('tittle', 'Lista de Clientes')
@section('content')
    
        <h1>Lista de Clientes</h1>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Endereço</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>
                            <a href="{{ route('clients.show', $client) }}">
                                {{ $client->nome }}
                            </a>
                        </td>
                        <td>{{ $client->endereco }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('clients.create') }}" class="btn btn-success">Novo Cliente</a>
        
@endsection