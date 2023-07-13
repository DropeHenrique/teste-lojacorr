<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|unique:categorias,nome',
        ]);

        $categoria = Categoria::create([
            'nome' => $request->input('nome'),
        ]);

        return response()->json($categoria, 201);
    }

    public function index()
    {
        $categorias = Categoria::all();

        return response()->json($categorias);
    }

    public function show($id)
    {
        $categoria = Categoria::findOrFail($id);

        return response()->json($categoria);
    }

    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return response()->json(null, 204);
    }
}
