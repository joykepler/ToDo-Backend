<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        return Tarefa::with('categoria')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'status' => 'required|in:pendente,em_andamento,concluida',
            'prioridade' => 'required|in:baixa,media,alta',
            'data_conclusao' => 'nullable|date',
            'categoria_id' => 'nullable|exists:categorias,id',
        ]);

        return Tarefa::create($request->all());
    }

    public function show(Tarefa $tarefa)
    {
        return $tarefa->load('categoria', 'notas');
    }

    public function update(Request $request, Tarefa $tarefa)
    {
        $request->validate([
            'titulo' => 'string|max:255',
            'descricao' => 'nullable|string',
            'status' => 'in:pendente,em_andamento,concluida',
            'prioridade' => 'in:baixa,media,alta',
            'data_conclusao' => 'nullable|date',
            'categoria_id' => 'nullable|exists:categorias,id',
        ]);

        $tarefa->update($request->all());
        return $tarefa;
    }

    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();
        return response()->json(null, 204);
    }
}
