<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Portada;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function show(Articulo $articulo){
        $mundos =Articulo::where('categoria_id', 5)->latest('id')->paginate(1);
        $politicas =Articulo::where('categoria_id', 6)->latest('id')->paginate(1);
        $tecnologias =Articulo::where('categoria_id', 7)->latest('id')->paginate(1);
        $deportes =Articulo::where('categoria_id', 8)->latest('id')->paginate(1);
        $categoria = ($articulo->categoria->id);
        $categorias = Categoria::where('id', '<', '5')->paginate(4);
        $semanas = Articulo::where('id', '!=', $articulo->id)->latest('id')->paginate(4);
        $articulos = Articulo::where('Categoria_id', $categoria)
                               ->where('id', '!=', $articulo->id)
                               ->latest('id')
                               ->paginate(8);

        return view('show', compact('articulo', 'articulos', 'semanas', 'categorias', 'mundos', 'politicas', 'tecnologias', 'deportes'));
    }

    public function categoria(Categoria $categoria){


        $mundos =Articulo::where('categoria_id', 5)->latest('id')->paginate(1);
        $politicas =Articulo::where('categoria_id', 6)->latest('id')->paginate(1);
        $tecnologias =Articulo::where('categoria_id', 7)->latest('id')->paginate(1);
        $deportes =Articulo::where('categoria_id', 8)->latest('id')->paginate(1);
        
        $arti=Articulo::where('categoria_id', $categoria->id)->get();
        $total = count($arti);
        $paginas=$total/4;
        $paginas=ceil($paginas);

        $categorias = Categoria::where('id', '<', '5')->paginate(4);
        $articulos= Articulo::where('categoria_id', $categoria->id)->latest('id')->paginate(6);
        $semanas= Articulo::where('categoria_id','!=', $categoria->id)->latest('id')->paginate(6);

        return view('categoria', compact('categoria','articulos', 'categorias', 'paginas', 'semanas', 'mundos', 'politicas', 'tecnologias', 'deportes'));
    }
}
