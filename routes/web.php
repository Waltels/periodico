<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\HomeController;
use App\Models\Articulo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.imdex');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    
 
});


Route::get('/{articulo}', [ArticuloController::class, 'show'])->name('home.show');
Route::get('dashboard/{categoria}', [ArticuloController::class, 'categoria'])->name('categoria.name');



