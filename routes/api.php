<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\NotaController;

Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('tarefas', TarefaController::class);
Route::apiResource('notas', NotaController::class);
