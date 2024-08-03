<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticuloController;


Route::get('articulos', [ArticuloController::class, 'index'])->name('admin.articulos.index');
Route::get('articulos/{articulo}/observar', [ArticuloController::class, 'observar'])->name('articulos.observar');
Route::post('articulos/{articulo}/obs', [ArticuloController::class, 'obs'])->name('articulos.obs');
