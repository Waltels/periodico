<?php

use App\Http\Controllers\Editor\ArticuloController;
use Illuminate\Support\Facades\Route;

Route::resource('articulos', ArticuloController::class)->names('articulos');

Route::post('articulos/{articulo}/estado', [ArticuloController::class, 'estado'])->name('articulos.estado');
Route::post('articulos/{articulo}/publicar', [ArticuloController::class, 'publicar'])->name('articulos.publicar');
Route::post('articulos/{articulo}/revisar', [ArticuloController::class, 'revisar'])->name('articulos.revisar');
Route::get('articulos/{articulo}/observacion', [ArticuloController::class, 'observacion'])->name('articulos.observacion');