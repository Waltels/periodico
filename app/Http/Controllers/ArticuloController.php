<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Portada;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function show(Articulo $articulo){

        $categoria = ($articulo->categoria->id);
        $categorias = Categoria::all();
        $semanas = Articulo::where('id', '!=', $articulo->id)->latest('id')->paginate(4);
        $articulos = Articulo::where('Categoria_id', $categoria)
                               ->where('id', '!=', $articulo->id)
                               ->latest('id')
                               ->paginate(8);

        return view('show', compact('articulo', 'articulos', 'semanas', 'categorias'));
    }

    public function categoria(Categoria $categoria){
        
        $arti=Articulo::where('categoria_id', $categoria->id)->get();
        $total = count($arti);
        $paginas=$total/4;
        $paginas=ceil($paginas);

        $categorias = Categoria::all();
        $articulos= Articulo::where('categoria_id', $categoria->id)->latest('id')->paginate(6);
        $semanas= Articulo::where('categoria_id','!=', $categoria->id)->latest('id')->paginate(6);

        return view('categoria', compact('categoria','articulos', 'categorias', 'paginas', 'semanas'));
    }
}
