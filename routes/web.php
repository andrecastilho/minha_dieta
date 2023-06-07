<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoadoresController;

Route::get('/', [DoadoresController::class, 'index'])->name('doadores.index');
Route::get('/doadores/create', [DoadoresController::class, 'create'])->name('doadores.create');
Route::get('/doadores/edit', [DoadoresController::class, 'edit'])->name('doadores.edit');
Route::post('/doadores/save', [DoadoresController::class, 'save'])->name('doadores.save');
