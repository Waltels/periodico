<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index(){

        $articulos = Articulo::latest()->paginate(20);
        return view('admin.index', compact('articulos'));
    }
    public function observar(Articulo $articulo){

        return view('admin.observar', compact('articulo'));
    }

    public function obs(Request $request, Articulo $articulo){
        $articulo->observacion()->create($request->all());
        $articulo->estado = 1;
        $articulo->save();

        return redirect()->route('admin.articulos.index');
    }
}
