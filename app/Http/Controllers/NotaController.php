<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;


class NotaController extends Controller
{
    public function index()
    {
        return Nota::with('tarefa')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'tarefa_id' => 'required|exists:tarefas,id',
            'conteudo' => 'required|string',
        ]);

        return Nota::create($request->all());
    }

    public function show(Nota $nota)
    {
        return $nota->load('tarefa');
    }

    public function update(Request $request, Nota $nota)
    {
        $request->validate([
            'conteudo' => 'required|string',
        ]);

        $nota->update($request->all());
        return $nota;
    }

    public function destroy(Nota $nota)
    {
        $nota->delete();
        return response()->json(null, 204);
    }
}
