<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create'); 
Route::post('/todo', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todo/{paramtodo}/edit', [TodoController::class, 'edit'])->name('todo.edit'); //{paramtodo} parameters func yg ada di controller edit dan update
Route::put('/todo/{paramtodo}/update', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todo/{paramtodo}/destroy', [TodoController::class, 'destroy'])->name('todo.destroy');