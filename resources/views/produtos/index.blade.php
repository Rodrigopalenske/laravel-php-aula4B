@extends('app')
@section('tittle', 'Lista de Clientes')
@section('content')
    <h1>Lista de Produtos</h1>
    <table class="table">
        <thead>
             <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Valor</td>
                <td>Estoque Disponível</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{$produto->id}}</td>
                    <td>
                        <a href="{{route('produtos.show', $produto)}}">
                            {{$produto->nome}}
                        </a>
                    </td>
                    <td>{{$produto->valor}}</td>
                        <td>{{$produto->estoque}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection