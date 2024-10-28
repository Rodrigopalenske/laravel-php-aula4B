<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Pegando todos os estudantes e enviando para o index
        $estudantes = Estudante::get();
        return view('estudantes.index', ['estudantes' => $estudantes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Enviando para tela de criação
        return view('estudantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Pegando os dados e criando
        $dados = $request->except('_token');
        Estudante::create($dados);
        return redirect('/estudantes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Pega os estudantes encontrados e envia para tela show
        $estudante = Estudante::find($id);
        return view('estudantes.show', ['estudante' => $estudante]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Editar os estudantes e direciona para tela editar
        $estudante = Estudante::find($id);
        return view('estudantes.edit', ['estudante' => $estudante]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Remove token antigo, pega os estudantes encontrados, salva e direciona para tela index
        $dados = $request->except('_token');
        $dados['nascimento'] = Carbon::createFromFormat('Y-m-d', $dados['nascimento']);

        $estudante = Estudante::find($id);
        $estudante->update([
            'nome' => $dados['nome'],
            'cpf' => $dados['cpf'],
            'nascimento' => $dados['nascimento'],

        ]);

        return redirect('/estudantes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Exclui id de estudante e redireciona para tela index
        $dados = Estudante::destroy($id);
        return redirect('/estudantes');
    }
}
