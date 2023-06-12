<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoadoresController;

Route::get('/', [DoadoresController::class, 'index'])->name('doadores.index');
Route::get('/{sexo}', [DoadoresController::class, 'saveHome'])->name('doadores.saveHome');
Route::post('/p', [DoadoresController::class, 'saveP'])->name('doadores.saveP');
Route::post('/p/{p}', [DoadoresController::class, 'saveFormulario'])->name('doadores.saveFormulario');

