<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Contracts\Models\FornecedorServiceInterface;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('fornecedores.index');
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function show(Fornecedor $fornecedor)
    {
        return view('fornecedores.show', compact('fornecedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FornecedorServiceInterface $service)
    {
        $service->create([
            'empresa_id' => Auth()->user()->id,
            'email' => $request->fornecedor['email'],
            'nome'  => $request->fornecedor['name'],
            'mensalidade' => $request->fornecedor['mensalidade']
        ]);
        return redirect()->route('fornecedores.index')->with('sucesso', 'Fornecedor cadastrado!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unidade  $unidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Fornecedor $fornecedor)
    {
        return view('fornecedores.edit', compact('fornecedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unidade  $unidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FornecedorServiceInterface $service, Fornecedor $fornecedor)
    {
        $service->update($fornecedor, $request->fornecedor);

        return redirect()->route('fornecedores.index')
        ->with('sucesso', 'Fornecedor atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unidade  $unidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, FornecedorServiceInterface $service, Fornecedor $fornecedor)
    {
        $service->destroy($fornecedor);
        if (!$request->ajax()) {
            return redirect()->route('fornecedores.index')
            ->with('sucesso', 'O Fornecedor foi removido!');
        }
    }
}
