<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // listar
    {
        // Buscar os clientes no banco de dados
                        // :: -> significa que esse get é um método static
        $clients = Client::get(); # fazemos um select de tudo no banco Clients(modelo/representação) e guardamos nessa variável
        //dd($clients);

        // Mostrar um frontend listando os clientes
        return view('clients.index', ['clients' => $clients]); // em resources view buscamos uma pasta clients
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token'); // remove o campo _token que vem do form
        Client::create($dados);
        return redirect('/clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) // mostrar detalhes
    {
        // buscar o cliente pelo usuario no banco de dados
        $client = Client::find($id);

        // retornar os dados do cliente em uma view (show)
        return view('clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
