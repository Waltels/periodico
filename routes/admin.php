<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticuloController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::get('articulos', [ArticuloController::class, 'index'])->middleware('can:Ver Publicaciones')->name('admin.articulos.index');

Route::get('articulos/{articulo}/observar', [ArticuloController::class, 'observar'])->name('articulos.observar');
Route::post('articulos/{articulo}/obs', [ArticuloController::class, 'obs'])->name('articulos.obs');
Route::get('articulos/portada', [ArticuloController::class, 'portada'])->middleware('can:Ver Portada')->name('admin.articulos.portada');

Route::get('portadas/{portada}/estado', [ArticuloController::class, 'estado'])->name('admin.portada.estado');
Route::put('portadas/{portada}/uptade', [ArticuloController::class, 'update'])->name('admin.portada.update');

Route::post('portadas', [ArticuloController::class, 'store'])->name('admin.portada.store');

Route::resource('/roles', RoleController::class)->middleware('can:Ver Roles')->names('admin.roles');

Route::resource('/permissions', PermissionController::class)->middleware('can:Ver Permisos')->names('admin.permissions');

Route::resource('/users', UserController::class)->middleware('can:Ver Usuarios')->names('admin.users');

