<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
class FornecedorApiController extends Controller
{
    public function index()
    {
        return Fornecedor::all();
    }
 
    public function show(Fornecedor $fornecedor)
    {
        return $fornecedor;
    }

    public function store(Request $request)
    {
        $fornecedor = Fornecedor::create($request->all());
        return response()->json($fornecedor, 201);
    }

    public function update(Request $request, Fornecedor $fornecedor)
    {
        $fornecedor->update($request->all());

        return response()->json($fornecedor, 200);
    }

    public function delete(Fornecedor $fornecedor)
    {
        $fornecedor->delete();
        return response()->json(null, 204);
    }
}
