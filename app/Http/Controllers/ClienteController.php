<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cliente::with('municipio.unidade_federativa:id,sigla')
            ->select([
                'clientes.id',
                'clientes.nome',
                'clientes.cpf',
                'clientes.data_nasc',
                'clientes.sexo',
                'clientes.mun_id',
            ])
            ->paginate(4);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClienteRequest $request)
    {
        $cliente = new Cliente([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'data_nasc' => $request->data_nasc,
            'sexo' => $request->sexo,
            'endereco' => $request->endereco,
            'mun_id' => $request->mun_id,
        ]);
        $cliente->save();
        return response()->json($cliente, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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