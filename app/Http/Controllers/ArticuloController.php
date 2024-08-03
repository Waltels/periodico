<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function show(Articulo $articulo){
        
        return view('show', compact('articulo'));
    }
}
