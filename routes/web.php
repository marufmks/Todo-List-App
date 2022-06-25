<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\TodosController;



// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [TodosController::class, 'index'])->name('index');
Route::post('/', [TodosController::class, 'create'])->name('create');
Route::get('/edit/{id}', [TodosController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [TodosController::class, 'update'])->name('update');
Route::get('/delete/{id}', [TodosController::class, 'destroy'])->name('destroy');
