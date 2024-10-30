<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Debug\CliRequest;

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
        
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $dados['avatar'] = $avatarPath;
        }


        
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
        // busca o cliente no banco através da variável id
        $client = Client::find($id);
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::find($id);
        $dados = $request->only('nome', 'endereco', 'observacao');

        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            if ($client->avatar){
                Storage::disk('public')->delete($client->avatar);
            }
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $dados['avatar'] = $avatarPath;
        }
        $client->update($dados);

        return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);
        if ($client->avatar){
            Storage::disk('public')->delete($client->avatar);
        }
        $client->delete();
        return redirect('/clients');
    }
}
